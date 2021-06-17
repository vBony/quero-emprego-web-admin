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
        $_SESSION['token'] = array('token' => $token, 'valid_at' => date("Y-m-d H:i:s", strtotime('+40 minutes')), 'id' => $id);
        $UserAdmin = new UserAdmin();
        $UserAdmin->salvarUltimoLogin($id, date("Y-m-d H:i:s"));
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
            }
        }else{
            session_destroy();
            header("Location: " . $_ENV['BASE_URL'] . 'login');
        }
    }
}

?>