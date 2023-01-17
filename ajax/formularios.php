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
$mail = new Email('smtp.kinghost.net', 'teste@clickvix.com.br', 'Click#2023', 'Teste');
$mail->enviarEmail('teste@clickvix.com.br', 'Teste Email');
$mail->formatarEmail($info);
if ($mail->enviarEmail()) {
    $data['sucesso'] = true;
} else {
    $data['erro'] = true;
}

//$data['retorno'] = 'sucesso';

die(json_encode($data));