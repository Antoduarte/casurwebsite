<?php get_header();?>

<h1 class="text-center mt-5"> <i><?Php the_title( )?></i> </h1>
<section class="container-fluid cards-shadow ">
 <div class="row">
 
<div class="col"><div class="card" >
  <img class="card-img-top" src="<?php echo get_template_directory_uri( );?>/img/reforestation.png"  alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Conservación y Reforestación </h5>
    <p class="card-text">Como parte de nuestra Responsabilidad Social Empresarial, contamos con un vivero donde actualmente tenemos más de 16 mil plantas con las especies: jenízaro, guanacaste, pochote, pintadillo, caoba, guapinol y cortez...</p>
    <a href="<?php echo esc_url( home_url( '/reforestacion' ) ); ?>" class="btn btn-success">Ver mas</a>
  </div>
</div></div>
<div class="col "><div class="card" >
  <img class="card-img-top" src="<?php echo get_template_directory_uri( );?>/img/radioactive.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Manejo de Residuos</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="" class="btn btn-success">Ver mas</a>
  </div>
</div></div>
<div class="col"><div class="card" >
  <img class="card-img-top" src="<?php echo get_template_directory_uri( );?>/img/planet-earth.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Educacíon Ambiental</h5>
    <p class="card-text">Apoyamos la Educación ambiental en las diferentes áreas: Escuelas, Comunidad y nuestros Colaboradores que ayudan a mejorar el medio ambiente....</p>
    <a href="#" class="btn btn-success">Ver mas</a>
  </div>
</div></div>
<div class="col"><div class="card">
  <img class="card-img-top" src="<?php echo get_template_directory_uri( );?>/img/green-energy.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Tecnología Verde</h5>
    <p class="card-text">Para un uso eficiente del Recurso Agua, contamos con 5 tipos de sistemas de riego: Gravedad, aspersión, pivote, compuertas y secano...</p>
    <a href="#" class="btn btn-success">Ver mas</a>
  </div>
</div>
</div>
</div>
</section>

<?php get_footer();?>