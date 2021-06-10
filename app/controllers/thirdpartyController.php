<?php
class thirdpartyController extends controllerHelper{
    public function facebook(){
        require $_SERVER['DOCUMENT_ROOT'].'/souenfermagem/app/assets/libraries/Facebook/autoload.php';
        $DBuser = new User();

        $fb = new Facebook\Facebook([
            'app_id' => '1338180326572722',
            'app_secret' => 'e8d644fb5ee41e92198aeeba124d6535',
            'default_graph_version' => 'v3.2',
        ]);

        $redirect = $_ENV['BASE_URL'].'thirdparty/facebook';

        $helper = $fb->getRedirectLoginHelper();

        try {

            $accessToken = $helper->getAccessToken();
        
        
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
        
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
        
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        
        }

        if(! isset($accessToken)){
            $permissions = ['email'];
            $loginUrl = $helper->getLoginUrl($redirect, $permissions);

            header('Location: '.$loginUrl);
        }else{
            $fb->setDefaultAccessToken($accessToken);
            $responseUser = $fb->get('/me?fields=email,name,picture,id,link', $accessToken);
            $responseImage = $fb->get('/me/picture?redirect=false&width=250&height=250', $accessToken);
        
            //Dados do usuario pelo FB
            $FBuser = $responseUser->getGraphUser();
        
            //Foto de perfil
            $FBuserImage = $responseImage->getGraphUser();
        }

        $FBid = $FBuser->getId();
        $FBemail = $FBuser['email'];
        $FBname = $FBuser['name'];

        if($DBuser->facebookVerifier($FBid, $FBemail) != false){
            $userData = $DBuser->facebookVerifier($FBid, $FBemail);

            //Verifica se é o primeiro acesso do usuário, se caso for, ir para pagina para continuar o cadastro
            if($userData['first_access'] == 1){
                $_SESSION['ID_user'] = $userData['id'];
                header('Location:'.$_ENV['BASE_URL'].'user/first_access');
            }else{
                header('Location: '.$_ENV['BASE_URL']);
            }

        }else{
           $DBuser->facebookRegister($FBid, $FBemail, $FBname);
           header('Location:'.$_ENV['BASE_URL'].'user/first_access');
        }

        // //Listagem de dados
        // echo "<strong>Access Token:  </strong>".$accessToken.'<br>';
        // echo 'ID: '.$FBuser->getId().'<br>';
        // echo '<strong>Nome:</strong> '.$FBuser['name']."<br>";
        // echo '<strong>Email: </strong>'.$FBuser['email']."<br>";
        // echo '<strong>Foto de perfil: '.'<br>';
        // echo '<img src="'.$FBuserImage['url'].'"/><br><br>';
        // echo $_GET['code'];
    }

    public function github(){
        // echo 'code: ' . $_GET['code'];

        $urlRequest = "https://github.com/login/oauth/access_token";
        $headers = array('Accept' => 'application/json');
        
        $code = $_GET['code'];
        $options = array(
            'client_id' => '0aa7c2975ae29003952e',
            'client_secret' => '3a1fba2f84bd9220628b64b42e08d6d6035885cd',
            'redirect_uri' => $_ENV['BASE_URL'] . 'thirdparty/github/',
            'code' => $code,
        );


        $request = Requests::post($urlRequest, $headers, $options);
        $result = json_decode($request->body);

        if(!empty($result)){
            if(isset($result->access_token)){
                $accessToken = $result->access_token;

                $_SESSION['token-git'] = $accessToken; 
                $urlRequest = "https://api.github.com/user";
                
                $headers = array(
                    'Accept' => 'application/json',
                    'Authorization' => "token $accessToken"
                );
                $options = array();
                $requestDados = Requests::get($urlRequest, $headers, $options);

                echo "dados: <br>";
                echo "<pre>";
                    print_r(json_decode($requestDados->body));
                echo "<pre>";
                echo "<br>";
            }

        }

    }

    public function gitcallback(){
        echo "dados: <br>";
        print_r($_GET);
        echo "<br>";
        print_r($_POST);
    }
}

?>