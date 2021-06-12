<?php
class thirdpartyController extends controllerHelper{
    private $accessToken;

    public function github(){

        /**
         * Verificando se o usuário aceitou o login com o github
         */
        if(isset($_GET['code']) || !empty($_GET['code'])){
            $code = $_GET['code'];
        }else{
            header("Location: " . $_ENV['BASE_URL'] . 'login');
        }

        /**
         * Definindo configurações para a requisição
         */
        $url = "https://github.com/login/oauth/access_token";
        $headers = array('Accept' => 'application/json');
        $options = array(
            'client_id' => $_ENV['GITHUB_CLIENT_ID'],
            'client_secret' => $_ENV['GITHUB_CLIENT_SECRET'],
            'redirect_uri' => $_ENV['BASE_URL'] . 'thirdparty/github/',
            'code' => $code,
        );


        $request = Requests::post($url, $headers, $options);
        $response = json_decode($request->body);

        if(!empty($response) && isset($response->access_token)){
            $this->accessToken = $response->access_token;
            $user_data = $this->getUserDataGit($this->accessToken);
            
            if($this->validarUsuario($user_data)){
                $UserAdmin = new UserAdmin();
                $user_db = $UserAdmin->verify_user_git($user_data['id_git']);   //Verificando se o usuário existe no banco de dados

                if($user_db != null){
                    if($user_db['status'] != 0){    //Usuário existe porém foi banido
                        header("Location: " . $_ENV['BASE_URL'] . 'error/nao-membro');
                    }else{
                        $this->autorizarUsuario($this->accessToken, $user_db['id']);
                        header("Location: " . $_ENV['BASE_URL']);
                    }
                }else{  //Salvando no banco
                    $UserAdmin = new UserAdmin();
                    $id = $UserAdmin->insert($user_data);
                    
                    // $this->autorizarUsuario($this->accessToken, $id);

                    $this->autorizarUsuario($this->accessToken, $id);
                    header("Location: " . $_ENV['BASE_URL']);
                }
            }else{
                header("Location: " . $_ENV['BASE_URL'] . 'error/nao-membro');
            }
        }

    }

    /**
     * Requisição para pegar os dados do usuário:
     * @var string login
     * @var int id
     * @var string foto
     * @var string name
     * @var string html_url
     * @var string login
     */
    private function getUserDataGit($access_token){
        $url = "https://api.github.com/user";

        $headers = array(
            'Accept' => 'application/json',
            'Authorization' => "token $access_token"
        );

        $response = Requests::get($url, $headers, array());
        $response = json_decode($response->body);

        $user_data['id_git'] = $response->id ?: null;
        $user_data['login_git'] = $response->login ?: null;
        $user_data['url_avatar_web'] = $response->avatar_url ?: null;
        $user_data['url'] = $response->html_url ?: null;
        $user_data['email_git'] = $response->email ?: null;
        $user_data['nome'] = $response->name ?: null;
        return $user_data;
    }

    
    /**
     * Verifica se o usuário está como colaborador no repositório do projeto
     */
    public function validarUsuario($user_data){
        $header = array(
            'Accept' => 'application/vnd.github.inertia-previewjson',
        );

        $members = Requests::get('https://api.github.com/repos/vBony/quero-emprego-web-admin/contributors', $header, array());
        $members = json_decode($members->body);

        foreach($members as $member){ 
            if($user_data['id_git'] == $member->id){    
                return true;
            }
        }

        return false;
    }
}

?>