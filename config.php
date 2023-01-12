<?php
//carregamento dinâmico de classes
$autoLoad = function ($class) {
    if (file_exists('classes/' . $class . '.php')) {
        include('classes/' . $class . '.php');
    }
};
spl_autoload_register($autoLoad);

require 'vendor/autoload.php';

define('INCLUDE_PATH', 'http://localhost/Projeto_01/');

?>