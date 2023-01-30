<?php verificaPermissaoPagina(2); ?>
<div class="box-content w100">
    <h2><i class="fa-solid fa-user-plus"></i> Adicionar Usuário</h2>
        <form method="post" enctype="multipart/form-data" >

        <?php
            if(isset($_POST['acao'])){

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
                <label for="">Imagem:</label>
                <input type="file" name="imagem" >
            </div><!--form-group-->
            <div class="form-group">
                <input type="submit" name="acao" value="Atualizar">             
            </div><!--form-group-->
        </form>
    <div class="clear"></div>
</div><!--box-content-->
<div class="clear"></div>