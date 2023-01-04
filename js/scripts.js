$(function(){
    $('nav.mobile').click(function(){
        //Evento do Menu mobile
        var listaMenu = $('nav.mobile ul');
        //Abrir menu através do fadeIn
        /*if(listaMenu.is(':hidden') == true)
            listaMenu.fadeIn();
        else
            listaMenu.fadeOut();*/
        
        //Abrir menu com slideToggle
        //listaMenu.slideToggle();

        //Abrir ou fechar sem efeitos
        /*if(listaMenu.is(':hidden') == true)
            listaMenu.show();
        else
            listaMenu.hide();*/

        if(listaMenu.is(':hidden') == true){
            //<i class="fa-sharp fa-solid fa-bars"></i>
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-sharp fa-solid fa-bars');
            icone.addClass('fa-solid fa-circle-xmark');
            listaMenu.slideToggle();
        }   
        else{
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-solid fa-circle-xmark');
            icone.addClass('fa-sharp fa-solid fa-bars');
            listaMenu.slideToggle();
        }
            

    
        //<i class="fa-solid fa-circle-xmark"></i>
    })
})