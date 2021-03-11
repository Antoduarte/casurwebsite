<?php get_header();
?>
<section class="container-fluid d-flex  hero2 align-items-center justify-content-center  mt-3" style="background: url(<?php echo get_the_post_thumbnail_url( );?>);">

</section>



<section class="container-fluid texto-grey " style="background: url(<?php echo get_template_directory_uri( );?>/img/bg.svg);
    width: 100%;
    background-position: center center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;" >

        <h2 class="text-center text-success pt-5 mb-5">
            <?Php the_title( )?>
        </h2> 
    <div class="row py-5">
        <div class="col-lg-6 col-md-4 col-12">
             <img src="<?php echo get_template_directory_uri( );?>/img/casur.svg" class="img-fluid" alt="svg">
        </div>

         <div class="col-lg-6 col-md-6 col-12 ">
           <?php the_content()?>
        <h4 class="text-success">Los ejes principales de la RSE son:</h4>
    
               <p><i class="fas fa-spa text-success"></i>   Los Colaboradores.</p>
               <p><i class="fas fa-spa text-success"></i>   El Medio Ambiente.</p>
               <p><i class="fas fa-spa text-success"></i>   Las Comunidades.</p>
        
         </div>
    </div>
          
</section>
<?php get_footer();?>