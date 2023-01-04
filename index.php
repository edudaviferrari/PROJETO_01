<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu website">
    <meta name="author" content="Eduardo Ferrari">

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/92dc659143.js" crossorigin="anonymous"></script>
    <title>Projeto 01</title>
</head>
<body>
<header>
    <div class="center">
        <div class="logo left"><a href="<?php echo INCLUDE_PATH ?>">Logomarca</a></div><!--LOGO-->
        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>contato">Contato</a></li>
            </ul>
        </nav>

        <nav class="mobile right">
            <div class="botao-menu-mobile"><i class="fa-sharp fa-solid fa-bars"></i></div>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>contato">Contato</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </div><!--CENTER-->
</header>

<?php

    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    if(file_exists('pages/'.$url.'.php')){
        include('pages/'.$url.'.php');
    }else{
        //Podemos Fazer o quiser, pois a página não existe
        include('pages/404.php');
    }

?>

<footer>
    <div class="center">
        <p>Todos os direitos reservados</p>
    </div>
</footer>

<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH ?>js/scripts.js"></script>
</body>
</html>