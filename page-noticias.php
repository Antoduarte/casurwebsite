<?php
/* 
* Template Name: Listado Noticias
*/
 get_header();?>
<?php while(have_posts(  )):the_post(  ); ?>
<div class="contenedor bg-noticias mt-3">
<div style="height: 120px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 271.49,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #fecd71d2;"></path></svg></div>
    <div class=" d-flex texto-principal flex-column align-items-center text-white">
<h2 class="center">
<?Php the_title();?>
</h2>
         <h4 class="text-center">Conoce las últimas novedades en casur.</h4>

    </div>
    <div style="height: 180px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </div>
    <div class="noticias">
<div class="row container flex-wrap">

    <?Php cas_noticias();?>
   
   
</div>
</div>
<?php endwhile; ?>
<?php get_footer();?>
