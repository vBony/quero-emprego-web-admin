<?php
class errorController extends controllerHelper{
    public function naoMembro(){
        $data = array();
        $data['css'] = 'nao-membro.css';
        $data['js'] = 'nao-membro.js';

        $this->loadView('nao-membro', $data);
    }
}