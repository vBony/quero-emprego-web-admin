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
        $data = array();

        $UserAdmin = new UserAdmin();
        $erros = $UserAdmin->validar($_POST);


        if($erros == null){
            // criar uma parada pra tratar e salvar os dados
        }else{
            echo json_encode($erros);
        }
    }
}