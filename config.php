<?php
require 'vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->loadEnv(__DIR__.'/.env');

if($_ENV['ENVIROMENT'] == 'development'){
    $headerHomolog = file_get_contents($_ENV['BASE_URL'] . 'app/views/homolog-header.php');
    echo $headerHomolog;
}

global $db;
try{
    // $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
    exit;
}
?>