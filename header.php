<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bienvenidos a la pagina oficial de CASUR">
  <meta name="keywords" content="Casur, Azucar, Ingenio, Nicaragua ">
  <meta name="author" content="CASUR">
  <title>  <?php bloginfo( 'name' );?></title>
  <meta name="copyright" content="Ingenio Casur">
  <link rel="shortcut icon" href="./img/favicon.png">
<?php wp_head();?>

</head>

<body>





  <header class="container mb-2">
    
  <div class="logo d-flex justify-content-center align-items-center">
   <img src="<?php echo get_template_directory_uri( );?>/img/LOGO_CASUR-02.png" loading="lazy" class="img-fluid mr-3 mb-md-4 mb-ms-0" alt="logo">
  </div>

    <nav id="menu" class="navbar navbar-expand-lg navbar-light">

      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="" id="navbarText">
      </div>
  
      <?php
          $args = array(
            'menu_class' =>'nav nav-justified flex-column flex-lg-row text-center ',
            'container_id'=>'navbarText',
             'container_class' =>'collapse navbar-collapse ',
             'theme_location'=>'menu_principal',
             'depth'             => 4,
             'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
              'walker'    => new WP_Bootstrap_Navwalker(),
          );
      
      wp_nav_menu( $args ); ?>
    </nav>
  </header>