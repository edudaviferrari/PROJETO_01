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
        <div class="menu-wraper">
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
            <div class="items-menu">
                <h2>Cadastro</h2>
                    <a <?php selecionadoMenu('cadastrar-depoimento'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
                    <a <?php selecionadoMenu('cadastrar-servico'); ?> href="">Cadastrar Serviço</a>
                    <a <?php selecionadoMenu('cadastrar-slide'); ?> href="">Cadastrar Slides</a>
                <h2>Gestão</h2>
                    <a <?php selecionadoMenu('listar-depoimentos'); ?> href="">Listar Depoimentos</a>
                    <a <?php selecionadoMenu('listar-servicos'); ?> href="">Listar Serviços</a>
                    <a <?php selecionadoMenu('listar-slides'); ?> href="">Listar Slides</a>
                <h2>Administração do Painel</h2>
                    <a <?php selecionadoMenu('editar-usuario'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuário</a>
                    <a <?php selecionadoMenu('adicionar-usuario'); ?> <?php verificaPermissaoMenu(2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-usuario">Adicionar Usuário</a>
                <h2>Configuração Geral</h2>
                    <a <?php selecionadoMenu('editar-site'); ?> href="">Editar Site</a>
            </div><!--items-menu-->
        </div><!--menu-wraper-->
    </div><!--MENU-->
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div><!--menu-btn-->
            
            <div class="loggout">
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa-solid fa-arrow-right-from-bracket"></i> <span>Sair</span></a>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>"><i class="fa-solid fa-house"></i> <span>Página Inicial</span></a>
                
            </div><!--loggout-->
            <div class="clear"></div>
        </div>
    </header>
    <div class="clear"></div>
    <div class="content">
        <?php Painel::carregarPagina(); ?>        
    </div><!--CONTEUDO DO PAINEL-->

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>

</body>

</html>