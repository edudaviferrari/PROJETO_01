<?php

class site{
    public static function updateUsuarioOnline(){
        if(isset($_SESSION['online'])){
            $token = $_SESSION['online'];
            $horarioAtual = date('Y-m-d H:i:s');
            $check = MySql::conectar()->prepare("SELECT `id` FROM `tb_admin.online` WHERE token = ?");
            $check->execute([$_SESSION['online']]);

            if($check->rowCount() == 1){
                $sql = MySql::conectar()->prepare("UPDATE `tb_admin.online` SET ultima_acao = ? WHERE token = ?");
                $sql->execute([$horarioAtual,$token]);
            }else{
                $ip = $_SERVER['REMOTE_ADDR'];
                $token = $_SESSION['online'];
                $horarioAtual = date('Y-m-d H:i:s');
                $sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.online` VALUES (null,?,?,?)");
                $sql->execute([$ip,$horarioAtual,$token]);
            }

            
        }else{
            $_SESSION['online'] = uniqid();
            $ip = $_SERVER['REMOTE_ADDR'];
            $token = $_SESSION['online'];
            $horarioAtual = date('Y-m-d H:i:s');
            $sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.online` VALUES (null,?,?,?)");
            $sql->execute([$ip,$horarioAtual,$token]);
        }
    }

    public static function contador(){
        //setcookie('visita','true',time() - 1);//Limpar o COOKIE
        if(!isset($_COOKIE['visita'])){
            setcookie('visita','true',time() + (60*60*24*7));
            $sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.visitas` VALUES (null,?,?)");
            $sql->execute([$_SERVER['REMOTE_ADDR'],date('Y-m-d')]);
        }
    }
}