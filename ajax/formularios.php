<?php
include('../config.php');
$data = [];
$assunto = 'Nova Mensagem do Site!';
$corpo = '';
foreach ($_POST as $key => $value) {
    $corpo.=ucfirst($key).":".$value;
    $corpo.="<hr>";
}
$info = ['Assunto' => $assunto, 'Corpo' => $corpo];
$mail = new Email('Seu Host', 'Seu E-mail', 'Sua Senha', 'Nome');
$mail->enviarEmail('E-mail', 'Nome');
$mail->formatarEmail($info);
if ($mail->enviarEmail()) {
    $data['sucesso'] = true;
} else {
    $data['erro'] = true;
}

//$data['retorno'] = 'sucesso';

die(json_encode($data));