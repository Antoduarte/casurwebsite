jQuery(document).ready(function($) {
    $('.filter').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        let valor = $(this).attr('data-nombre');
        if (valor == 'todos') {
            $('.cont-work').show('1000');
        } else {
            $('.cont-work').not('.' + valor).hide('1000');
            $('.cont-work').filter('.' + valor).show('1000');
        }
    });

    

});


window.addEventListener("load",function(){

    let valor = jQuery(this).attr('data-nombre');
   
    jQuery('.cont-work').not('.' + valor).hide('1000');
        
    jQuery('.cont-work').filter('.azucar').show('1000');
   

})