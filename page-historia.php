

<?php 
/* 
* Template Name: Linea De Tiempo
*/
get_header();?>
<div class="container">
         <div class="row justify-content-center">
              <div class="col-md-8">
                   <blockquote class="subtitulo text-center pl-3">
                         <?php while(have_posts()): the_post();
                                   

                                   $titulo = get_the_title();

                              endwhile;
                         ?>
                   </blockquote>
              </div>
         </div>
    </div>

    <section class="gradiente" >
         <h2 class=" text-center display-4 py-4 " style="color:#25303B;"><?php echo $titulo; ?></h2>
         <section class="mt-5" id="timeline">
         <div class="container pb-4">

                   <?php edc_query_cursos(); ?>
       
         </div>
         </section>
    </section>
<?php get_footer();?>