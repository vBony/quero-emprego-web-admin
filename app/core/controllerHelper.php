<?php
class controllerHelper{
    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        require 'app/views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $viewData = array()){
        extract ($viewData);
        require 'app/views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require 'app/views/'.$viewName.'.php';
    }




    /**
     * Cria uma sessão temporária do usuário 
     */
    public function autorizarUsuario($token, $id){
        $_SESSION['token'] = array('token' => $token, 'valid_at' => date("Y-m-d H:i:s", strtotime('+10 minutes')), 'id' => $id);
    }

    /**
     * Verifica se o usuário possui uma sessão valida, caso contrario é redirecionado para a pagina de login
     */
    public function verificarSessao(){
        if(isset($_SESSION['token'])){
            $started_at = strtotime($_SESSION['token']['valid_at']);
            $now = strtotime(date("Y-m-d H:i:s"));

            if($started_at < $now){
                session_destroy();
                header("Location: " . $_ENV['BASE_URL'] . 'login');
            }else{
                echo "Vence às: " . date("d-m-Y H:i:s", $started_at);
            }
        }
    }
}

?>