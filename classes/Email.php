<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class Email
{
    public static function logado(){
        return isset($_SESSION['login']) ? true : false;
    }

    private $mailer;

    public function __construct($host, $username, $senha, $nome)
    {
        
        $this->mailer = new PHPMailer(true);

        $this->mailer->isSMTP();
        $this->mailer->Host = $host;
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = $username;
        $this->mailer->Password = $senha;
        $this->mailer->SMTPSecure = 'ssl';
        $this->mailer->Port = 465;

        $this->mailer->setFrom($username, $nome);
        $this->mailer->isHTML(true);
        $this->mailer->CharSet = 'UTF-8';
    }


    public function enviarPara($email, $nome)
    {
        $this->mailer->addAddress($email, $nome);
    }

    public function formatarEmail($info)
    {
        $this->mailer->Subject = $info['Assunto'];
        $this->mailer->Body = $info['Corpo'];
        $this->mailer->AltBody = strip_tags($info['Corpo']);
    }

    public function enviarEmail()
    {
        if ($this->mailer->send()) {
            return true;
        } else {
            return false;
        }
    }
}
