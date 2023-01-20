<?php
if (isset($_GET['loggout'])) {
    Painel::loggout();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/92dc659143.js" crossorigin="anonymous"></script>
    <title>Painel de Controle</title>
</head>

<body>
    <div class="menu">
        <div class="box-usuario">
            <?php
                if($_SESSION['img'] == ''){
            ?>
                <div class="avatar-usuario">
                    <i class="fa-solid fa-user"></i>
                </div><!--avatar-usuario-->
            <?php }else{ ?>
                <div class="imagem-usuario">
                    <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" alt="Imagem do usuário">
                </div><!--imagem-usuario-->

            <?php } ?>
            <div class="nome-usuario">
                <p><?php echo $_SESSION['nome']; ?></p>
                <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
            </div><!--nome-usuario-->
        </div><!--box-usuario-->
    </div><!--MENU-->
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div><!--menu-btn-->
            <div class="loggout">
                <a href="<?php echo INCLUDE_PATH_PAINEL; ?>?loggout"><i class="fa-solid fa-arrow-right-from-bracket"></i> <span>Sair</span></a>
            </div><!--loggout-->
            <div class="clear"></div>
        </div>
    </header>
    <div class="clear"></div>
    <div class="content">
        <div class="box-content left w100">

        </div><!--box-content-->

        <!-- <div class="box-content left w100">

        </div>

        <div class="box-content left w50">

        </div>

        <div class="box-content right w50">

        </div> -->
        <div class="clear"></div>
    </div><!--CONTEUDO DO PAINEL-->

</body>

</html>