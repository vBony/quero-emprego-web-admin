<?php

class loginController extends controllerHelper{
    public function index(){
        $data = array();
        $data['css'] = 'login.css';
        $data['js'] = 'login.js';

        $params = http_build_query(array(
            'client_id' => "0aa7c2975ae29003952e",
            'redirect_uri' => $_ENV['BASE_URL'] . 'thirdparty/github/',
        ));

        $data['git_login'] = "https://github.com/login/oauth/authorize?$params";
        

        $this->loadView('login', $data);
    }
}