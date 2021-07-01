<?php
class userController extends controllerHelper{
    public function profile($id){
        $data = array();
        $data['id'] = $id;

        $this->loadTemplate('user-profile', $data);
    }

    public function register(){
        $data = array();
        $data['css'] = 'user-register.css';
        $data['js'] = 'user-register.js';

        $this->loadView('user-register', $data);
    }

    public function login(){
        $data = array();

        $this->loadTemplate('user-login', $data);
    }

    public function first_access(){
        echo "<h1>Primeiro Acesso!</h1>";
    }

    public function edit(){
        if(!$this->verificarSessaoApi()){
            echo json_encode(array('session' => false));
            exit;
        }
        
        $data = $_POST;
        $UserAdmin = new UserAdmin();
        $msg = $UserAdmin->validar($data);


        if($msg == null){
            $data['id'] = intval($this->getIdLogged());
            $UserAdmin->update($data);

            $msg['msg'] = "Dados alterados com sucesso!";
            echo json_encode($msg);
        }else{
            echo json_encode($msg);
        }
    }
}