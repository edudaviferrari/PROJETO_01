<div class="box-content w100">
    <h2><i class="fa-solid fa-pen-to-square"></i> Editar Usuário</h2>
        <form method="post" enctype="multipart/form-data" >
            <?php
            if(isset($_POST['acao'])){
                //Enviei o meu formulário
                
                
                $nome = $_POST['nome'];
                $senha = $_POST['password'];
                $imagem = $_FILES['imagem'];
                $imagem_atual = $_POST['imagem_atual'];
                $usuario = new Usuario();
                if($imagem['name'] != ''){
                    $usuario = new Usuario();
                    //Existe o upload de imagem.
                    if(Painel::imagemValida($imagem)){
                        Painel::deleteFile($imagem_atual);
                        $imagem = Painel::uploadFile($imagem);
                        if($usuario->atualizarUsuario($nome,$senha,$imagem)){
                            $_SESSION['img'] = $imagem;
                            Painel::alert('sucesso','Atualizado com sucesso com sucesso junto com a imagem!');
                        }else{
                            Painel::alert('erro','Ocorreu um erro ao atualizar junto com a imagem');
                        } 
                    }else{
                        Painel::alert('erro','O formato da imagem não é válido');
                    }
                }else{
                    $imagem = $imagem_atual;
                    if($usuario->atualizarUsuario($nome,$senha,$imagem)){
                        Painel::alert('sucesso','Atualizado com sucesso!');
                    }else{
                        Painel::alert('erro','Ocorreu um erro ao atualizar');
                    }
                }
            }

            ?>
            <div class="form-group">
                <label for="">Nome:</label>
                <input type="text" name="nome" required value="<?php echo $_SESSION['nome'] ?>">
            </div><!--form-group-->
            <div class="form-group">
                <label for="">Senha:</label>
                <input type="password" name="password" required value="<?php echo $_SESSION['password'] ?>">
            </div><!--form-group-->
            <div class="form-group">
                <label for="">Imagem:</label>
                <input type="file" name="imagem" >
                <input type="hidden" name="imagem_atual" value="<?php echo $_SESSION['img'] ?>">
            </div><!--form-group-->
            <div class="form-group">
                <input type="submit" name="acao" value="Atualizar">
                
            </div><!--form-group-->
        </form>
    <div class="clear"></div>
</div><!--box-content-->
<div class="clear"></div>