<?php

session_start();
date_default_timezone_set('America/Sao_Paulo');

// $autoLoad = function ($class) {
//     if (file_exists('classes/' . $class . '.php')) {
//         include('classes/' . $class . '.php');
//     }
//     include ('classes/'.$class.'.php');
// };
$autoload = function($class){
    if($class == 'Email'){
        require_once('vendor/autoload.php');
    }
    include('classes/'.$class.'.php');
};

spl_autoload_register($autoload);

require 'vendor/autoload.php';


define('INCLUDE_PATH', 'http://localhost/Projeto_01/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH . 'painel/');

define('BASE_DIR_PAINEL',__DIR__.'/painel');

//Conectar com o Banco de Dados
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DATABASE','projeto_01');

//Constante para o Painel de Controle
define ('NOME_EMPRESA',"Eduardo Ferrari Desenvolvimento WEB");

//FUNÇÕES DO PAINEL
function pegaCargo($cargo){
    $arr =[
        '0' => 'Normal',
        '1' => 'Sub Administrador',
        '2' => 'Administrador'
    ];

        return $arr[$cargo];
}

function selecionadoMenu($par){
    $url = explode('/',@$_GET['url'])[0];
    if($url == $par){
        echo 'class="menu-active"';
    }
}

function verificaPermissaoMenu($permissao){
    if($_SESSION['cargo'] >= $permissao){
        return;
    }else{
        echo 'style="display:none"';
    }
}

function verificaPermissaoPagina($permissao){
    if($_SESSION['cargo'] >= $permissao){
        return;
    }else{
        include('painel/pages/permissao_negada.php');
    }
}