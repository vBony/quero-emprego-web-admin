<?php
global $routes;
$routes = array();
$routes['/user/profile/{id}'] = '/user/profile/:id';
$routes['/error/nao-membro'] = '/error/naoMembro';
$routes['/colaboradores/get-user'] = '/colaboradores/getUser';
$routes['/colaboradores/leader-update-user'] = '/colaboradores/leaderUpdateUser';