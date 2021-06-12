<?php
class homeController extends controllerHelper{
    public function index(){
        $data = array();

        $this->verificarSessao();

        $data['css'] = 'home.css';
        $data['js'] = 'home.js';
        
        $this->loadTemplate('home', $data);
    }

    public function home(){
        $data = array();

        $data['css'] = 'home.css';
        $data['js'] = 'home.js';

        $this->loadTemplate('home', $data);
    }
}

?>