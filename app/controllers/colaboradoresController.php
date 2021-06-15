<?php

class colaboradoresController extends controllerHelper{

    public function index(){
        $this->verificarSessao();

        $UserAdmin = new UserAdmin();
        $user = $UserAdmin->get_user_data($_SESSION['token']['id']);

        $data = array();

        $data['css'] = 'colaboradores.css';
        $data['js'] = 'colaboradores.js';
        $data['user'] = $user;

        $this->loadTemplate('colaboradores', $data);
    }
}