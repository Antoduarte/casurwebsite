<?php get_header();?>

<section class="container-fluid d-flex  hero align-items-center justify-content-center  mt-3" style="background: url(<?php echo get_the_post_thumbnail_url( );?>);">
<h2 class="text-white"><?Php the_title( )?></h2>
</section>


<section class="container mb-4" > 
<div class="row flex-wrap justify-content-center">
<div class="col-md-10 py-4 px-3 bg-light empresa">   
<?Php the_content();?>
</div>
</div>
</section>
<?php get_footer();?>