<?php
class homeController extends controllerHelper{
    public function index(){
        $this->verificarSessao();
        $data = array();

        $UserAdmin = new UserAdmin();
        $user = $UserAdmin->get_user_data($_SESSION['token']['id']);

        $data['css'] = 'home.css';
        $data['js'] = 'home.js';
        $data['user'] = $user;
        
        $this->loadTemplate('home', $data);
    }
}

?>