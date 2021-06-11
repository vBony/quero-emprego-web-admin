<?php

class loginController extends controllerHelper{
    public function index(){
        $data = array();
        $data['css'] = 'login.css';
        $data['js'] = 'login.js';

        $params = http_build_query(array(
            'client_id' => $_ENV['GITHUB_CLIENT_ID'],
            'redirect_uri' => $_ENV['BASE_URL'] . 'thirdparty/github/',
        ));

        $data['git_login'] = "https://github.com/login/oauth/authorize?$params";
        

        $this->loadView('login', $data);
    }
}