<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/92dc659143.js" crossorigin="anonymous"></script>
    <title>Painel de Controle</title>
</head>
<body>
    <div class="box-login">
        <form method="post" action="">
            <h2>Efetue o login:</h2>
            <input type="text" name="user" placeholder="Login..." required>
            <input type="password" name="password" required>
            <input type="submit" name="acao" value="Logar!">
        </form>
    </div>
</body>
</html>