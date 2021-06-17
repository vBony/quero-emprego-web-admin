<?php

class colaboradoresController extends controllerHelper{

    public function index(){
        $this->verificarSessao();

        $UserAdmin = new UserAdmin();
        $user = $UserAdmin->buscar($_SESSION['token']['id']);
        $users = $UserAdmin->buscar();

        $data = array();

        $data['css'] = 'colaboradores.css';
        $data['js'] = 'colaboradores.js';
        $data['user'] = $user;
        $data['users'] = $users;

        $this->loadTemplate('colaboradores', $data);
    }

    public function getUser(){
        $this->verificarSessao();

        $id = isset($_POST['id']) && !empty($_POST['id']) ? $_POST['id'] : null;

        if(!empty($id)){
            $UserAdmin = new UserAdmin();
            $Cargos = new Cargos();
            $data['user'] = $UserAdmin->buscar($id);
            $data['listas']['cargos'] = $Cargos->buscar();

            echo json_encode($data);
        }

    }

    // Função que altera o cargo e/ou torna o usuario banido, lá da lista de colaboradores
    public function leaderUpdateUser(){

    }
}