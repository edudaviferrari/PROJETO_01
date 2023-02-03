<?php

class Usuario{

    public function atualizarUsuario($nome,$senha,$imagem){
        $sql = MySql::conectar()->prepare("UPDATE `tb_admin.usuarios` SET nome = ?, password = ?, img = ? WHERE user = ?");
        if($sql->execute([$nome,$senha,$imagem,$_SESSION['user']])){
            //usuário atualizado com sucesso
            return true;
        }else{
            return false;
        }
    }

    public static function userExists($user){
        $sql = MySql::conectar()->prepare("SELECT `id` FROM `tb_admin.usuarios` WHERE user=?");
        $sql->execute([$user]);
        if($sql->rowCount() == 1){
            return true;
        }else{
            return false;
        }
    }

    public static function cadastrarUsuario($user,$senha,$imagem,$nome,$cargo){
        $sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.usuarios` VALUES (null,?,?,?,?,?)");
        $sql->execute([$user,$senha,$imagem,$nome,$cargo]);
    }
    
}