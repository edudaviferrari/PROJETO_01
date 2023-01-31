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

    }
    
}