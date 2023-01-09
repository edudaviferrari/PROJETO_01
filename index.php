<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu website">

    <link rel="shortcut icon" href="<?php echo INCLUDE_PATH ?>favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/92dc659143.js" crossorigin="anonymous"></script>
    <title>Projeto 01</title>
</head>
<body>
<base base="<?php INCLUDE_PATH; ?>" />
    <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch($url){
            case 'especialidades':
                echo '<target target="especialidades" />';
                break;
            case 'servicos':
                echo '<target target="servicos" />';
        }
    ?>

<header>
    <div class="center">
        <div class="logo left"><a href="<?php echo INCLUDE_PATH ?>">Logomarca</a></div><!--LOGO-->
        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>especialidades">Especialidades</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>servicos">Serviços</a></li>
                <li><a realtime="contato" href="<?php echo INCLUDE_PATH ?>contato">Contato</a></li>
            </ul>
        </nav>

        <nav class="mobile right">
            <div class="botao-menu-mobile"><i class="fa-sharp fa-solid fa-bars"></i></div>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>especialidades">Especialidades</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>servicos">Serviços</a></li>
                <li><a realtime="contato" href="<?php echo INCLUDE_PATH ?>contato">Contato</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </div><!--CENTER-->
</header>

<div class="container-principal">
<?php

    

    if(file_exists('pages/'.$url.'.php')){
        include('pages/'.$url.'.php');
    }else{
        //Podemos Fazer o quiser, pois a página não existe
        if($url != 'especialidades' && $url != 'servicos'){
            $pagina404 = true;
            include('pages/404.php');
        }else{
            include('pages/home.php');
        }
    }

?>
</div><!--CONTAINER-PRINCIPAL-->

<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
    <div class="center">
        <p>Todos os direitos reservados</p>
    </div>
</footer>

<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH ?>js/scripts.js"></script>
<?php
    if($url == 'home' || $url == ''){
?>
    <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
<?php } ?>
<script src="<?php echo INCLUDE_PATH ?>js/efeitosHome.js"></script>
</body>
</html>