<section class="banner-container">
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/image/bg-form.jpg')" class="banner-single"></div><!--BANNER-SINGLE-->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/image/bg-form2.jpg')" class="banner-single"></div><!--BANNER-SINGLE-->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/image/bg-form3.jpg')" class="banner-single"></div><!--BANNER-SINGLE-->
    <div class="overlay"></div><!--OVERLAY-->
    <div class="center">
        
        <form method="post" action="">
            <h2>Qual o seu melhor e-mail</h2>
            <input type="email" name="email" required>
            <input type="hidden" name="identificador" value="form_home">
            <input type="submit" name="acao" value="Cadastrar!">
        </form>   
    </div><!--CENTER-->
    <div class="bullets"><!--adicionado de forma dinâmica--></div><!--BULLETS-->
</section><!--Banner-Container-->

<section class="descricao-autor">
    <div class="center">
        <div class="w50 left">
            <h2>Eduardo Ferrari</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eius odit doloremque? Deleniti voluptatibus quisquam minima obcaecati, libero quod culpa consequatur ab soluta dolore cumque error earum tenetur aliquid. Tempore. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla cum at eaque porro vel perspiciatis, ab tempore modi soluta facilis eveniet ex error sapiente deleniti! Aliquam eligendi dicta similique dolorum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eius odit doloremque? Deleniti voluptatibus quisquam minima obcaecati, libero quod culpa consequatur ab soluta dolore cumque error earum tenetur aliquid. Tempore.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eius odit doloremque? Deleniti voluptatibus quisquam minima obcaecati, libero quod culpa consequatur ab soluta dolore cumque error earum tenetur aliquid. Tempore. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla cum at eaque porro vel perspiciatis, ab tempore modi soluta facilis eveniet ex error sapiente deleniti! Aliquam eligendi dicta similique dolorum?</p>
        </div>
        <div class="w50 left">
            <img class="right" src="<?php echo INCLUDE_PATH ?>image/foto.jpg" alt="Foto do Autor"> <!--Colocar foto-->
        </div><!--Foto Autor-->
        <div class="clear"></div>
    </div><!--CENTER-->
</section><!--Descricao-Autor-->

<section id="especialidades" class="especialidades">
    <div class="center">
        <h2 class="title">Especialidades</h2>
        <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-css3-alt"></i></h3>
            <h4>CSS3</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, eos dolorum debitis aliquid neque iste ex at molestias cumque ratione. Impedit voluptatibus totam quibusdam nesciunt nam perferendis atque! Explicabo, vitae!</p>
        </div><!--box-especialidade-->
        <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-html5"></i></h3>
            <h4>HTML5</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, eos dolorum debitis aliquid neque iste ex at molestias cumque ratione. Impedit voluptatibus totam quibusdam nesciunt nam perferendis atque! Explicabo, vitae!</p>
        </div><!--box-especialidade-->
        <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-js"></i></h3>
            <h4>JavaScript</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, eos dolorum debitis aliquid neque iste ex at molestias cumque ratione. Impedit voluptatibus totam quibusdam nesciunt nam perferendis atque! Explicabo, vitae!</p>
        </div><!--box-especialidade-->
        <div class="clear"></div>
    </div><!--CENTER-->
</section><!--ESPECIALIDADES-->

<section class="extras">
    <div class="center">
        <div class="w50 left depoimentos-container">
            <h2 class="title">Depoimentos dos nossos clientes</h2>
            <div class="depoimento-single">
                <p class="depoimento-descricao">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore beatae ex, similique rem distinctio velit ab placeat ratione nostrum vero, magni recusandae atque ducimus quam iusto expedita doloremque quae nobis."</p>
                <p class="nome-autor">Lorem Ipsum</p>
            </div><!--Depoimento-single-->
            <div class="depoimento-single">
                <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore beatae ex, similique rem distinctio velit ab placeat ratione nostrum vero, magni recusandae atque ducimus quam iusto expedita doloremque quae nobis.</p>
                <p class="nome-autor">Lorem Ipsum</p>
            </div><!--Depoimento-single-->
            <div class="depoimento-single">
                <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore beatae ex, similique rem distinctio velit ab placeat ratione nostrum vero, magni recusandae atque ducimus quam iusto expedita doloremque quae nobis.</p>
                <p class="nome-autor">Lorem Ipsum</p>
            </div><!--Depoimento-single-->
        </div><!--W50-->

        <div id="servicos" class="w50 left servicos-container">
            <h2 class="title">Serviços</h2>
            <div class="servicos">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam porro sed earum mollitia fugit corrupti suscipit, quaerat animi cupiditate est perferendis inventore repudiandae neque ipsum recusandae placeat a eveniet officiis!</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam porro sed earum mollitia fugit corrupti suscipit, quaerat animi cupiditate est perferendis inventore repudiandae neque ipsum recusandae placeat a eveniet officiis!</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam porro sed earum mollitia fugit corrupti suscipit, quaerat animi cupiditate est perferendis inventore repudiandae neque ipsum recusandae placeat a eveniet officiis!</li>
                </ul>
            </div><!--servicos-->
        </div><!--W50-->
        <div class="clear"></div>
    </div><!--CENTER-->
</section><!--EXTRAS-->