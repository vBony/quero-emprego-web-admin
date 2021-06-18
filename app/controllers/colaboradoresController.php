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
        $erros = array();
        $msg = array();
        $UserAdmin = new UserAdmin();

        
        if($this->verificarSessaoApi() == false){
            $erros['error_fatal'] = 'token_invalid';
            echo json_encode($erros);
            exit;
        }

        $user = $UserAdmin->buscar($_SESSION['token']['id']);

        $cargo = null;
        $banned = false;
        $id = null;

        if(isset($_POST['cargo']) && $_POST['cargo'] != '0'){
            $cargo = $_POST['cargo'];
        }else{
            $erros['erros']['cargo-users-edit'] = "Selecione um cargo";
        }

        if(isset($_POST['banned']) && $_POST['banned'] != false){
            $banned = $_POST['banned'];
        }

        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = $_POST['id'];
        }

        if(empty($erros) && $user['cargo'] == '2'){
            $UserAdmin->leaderUpdateUser($cargo, $banned, $id);
            $msg['msg'] = 'success';
            echo json_encode($msg);
        }elseif($user['cargo'] != '2'){
            $erros['erros']['modal'] = 'Você não tem permissão para executar essa ação.';
            echo json_encode($erros);
        }else{
            echo json_encode($erros);
        }

        
    }
}