<?php

session_start();
$autoLoad = function ($class) {
    if (file_exists('classes/' . $class . '.php')) {
        include('classes/' . $class . '.php');
    }
    include ('classes/'.$class.'.php');
};
spl_autoload_register($autoLoad);

require 'vendor/autoload.php';


define('INCLUDE_PATH', 'http://localhost/Projeto_01/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH . 'painel/');

//Conectar com o Banco de Dados
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DATABASE','projeto_01');