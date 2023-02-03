<?php

    verificaPermissaoPagina(2); 
    

?>
<div class="box-content w100">
    <h2><i class="fa-solid fa-user-plus"></i> Adicionar Usuário</h2>
        <form method="post" enctype="multipart/form-data" >

        <?php
            if(isset($_POST['acao'])){
                $login = $_POST['login'];
                $nome = $_POST['nome'];
                $senha = $_POST['password'];
                $imagem = $_FILES['imagem'];
                $cargo = $_POST['cargo'];

                if($login == ''){
                    Painel::alert('erro','Campo login está vazio.');
                }else if($nome == ''){
                    Painel::alert('erro','Campo nome vazio');
                }else if($senha == ''){
                    Painel::alert('erro','Campo senha vazio');
                }else if($cargo == ''){
                    Painel::alert('erro','Selecione um cargo');
                // }else if($imagem['name'] == ''){
                //     Painel::alert('erro','Selecione uma imagem');
                }else{
                    //podemos cadastrar
                    if($cargo >= $_SESSION['cargo']){
                        Painel::alert('erro','Selecione um cargo válido');
                    }else if(Painel::imagemValida($imagem) == false){
                        Painel::alert('erro','Formato do arquivo não é válido');
                    }else if(Usuario::userExists($login)){
                        Painel::alert('erro','Login já existe, escolha outro por favor');
                    }else{
                        //Apenas cadastrar no banco de dados!
                        $usuario = new Usuario();
                        $imagem = Painel::uploadFile($imagem);
                        $usuario->cadastrarUsuario($login,$senha,$imagem,$nome,$cargo);
                        Painel::alert('sucesso','O cadastro do usuário '.$login.' Foi realizado com sucesso');
                    }
                }

            }
        ?>
            
            <div class="form-group">
                <label for="">Nome:</label>
                <input type="text" name="nome" required >
            </div><!--form-group-->
            <div class="form-group">
                <label for="">Login:</label>
                <input type="text" name="login" required >
            </div><!--form-group-->
            <div class="form-group">
                <label for="">Senha:</label>
                <input type="password" name="password" required >
            </div><!--form-group-->
            <div class="form-group">
                <label >Cargo:</label>
                <select name="cargo">
                    <?php
                        foreach(Painel::$cargos as $key => $value){
                           if($key < $_SESSION['cargo']) echo '<option value="'.$key.'">'.$value.'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Imagem:</label>
                <input type="file" name="imagem" >
            </div><!--form-group-->
            <div class="form-group">
                <input type="submit" name="acao" value="Cadastrar">             
            </div><!--form-group-->
        </form>
    <div class="clear"></div>
</div><!--box-content-->
<div class="clear"></div>