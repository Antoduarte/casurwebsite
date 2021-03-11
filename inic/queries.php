<?php 

function cas_noticias($cantidad = -1){
    $args = array(
     'post-type' => 'noticias',
     'posts_per_page' => $cantidad
                    );
      $noticias = new WP_Query($args);
      
      while ($noticias -> have_posts()): $noticias -> the_post(); ?>

<div class="card" style="width:20rem;">
<?php the_post_thumbnail('', array('class' =>'card-img-top img-fluid')); ?>
  <div class="bg-noticias text-white">
  <h2 class="text-center pt-2"><?Php the_title();?></h2>
<p class="px-4 text-right">Fecha: <?php the_time('j F Y'); ?> </p>
  </div>
  <div class="card-body">
  <p class=""><?Php the_content();?></p>
  </div>
</div>

<?php endwhile; wp_reset_postdata(  );

}

function edc_query_cursos($cantidad = -1) {
  $args = array(
       'post_type' => 'clases_cocina',
       'posts_per_page' => $cantidad
  );

  $clases = new WP_Query($args);

  while( $clases->have_posts() ): $clases->the_post();
  
  // printf( '<pre>%s</pre>', var_export( get_post_custom( get_the_ID() ), true ) );
  ?>

  <article>
    <div class="inner">
      <span class="date">
        <span class="year"><?php echo get_post_meta(get_the_ID(),'edc_historia_fecha', true); ?></span>
      </span>
      <h2><?Php the_title();?></h2>
<?Php the_content();?>
    </div>
  </article>
  
 


  <?php
  endwhile; wp_reset_postdata();
}