<?php get_header();?>
<?php while(have_posts(  )):the_post(  ); ?>

    <div id="carouselExampleSlidesOnly" class="mt-3 slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" loading="lazy" src="<?php echo get_post_meta(get_the_ID(),'cas_homepage_carrusel-img1', true); ?>" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" loading="lazy" src="<?php echo get_post_meta(get_the_ID(),'cas_homepage_carrusel-img2', true); ?>" alt="Second slide">
  
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" loading="lazy" src="<?php echo get_post_meta(get_the_ID(),'cas_homepage_carrusel-img3', true); ?>" alt="Third slide">
        </div>

      </div>
    </div>
    
  
    <div class="container">
      <div class="row">
        <!--principal-->

        <div class="section-logo d-flex flex-column justify-content-center align-items-center">
          <h1>
    Produciendo azúcar y <br>
     generando energia
          </h1>

        </div>
        <section class="col-lg-8 col-md-12 col-12 principal">

        <main>
          <h3 class="pl-1 text-dark">
              CASUR S.A
          </h3>
          <hr>
          <p class="animar texto-principal mt-4"> Somos la principal fuente de ingresos económicos en la zona sur de nuestro país, generando más de 2,000 empleos en cada zafra.</p>
 

          <p class="animar texto-principal mb-4">
          El 73% de la producción está en el departamento de Rivas y un 27% en el municipio de Nandaime del departamento de Granada, del total de área a moler el 27% es de productores de la zona.
         </p>

  
          <div class="botones-work mt-5 animar">
            <ul class="d-flex justify-content-around">
              <li class="filter active btn btn-outline-success" data-nombre="azucar">
                <img src="<?php echo get_template_directory_uri( );?>/img/empresa.png" loading="lazy" alt="">
                Empresa

              </li>
              <li class="filter btn btn-outline-success" data-nombre="energia">
                <img src="<?php echo get_template_directory_uri( );?>/img/cana-de-azucar.png" loading="lazy" alt="">
                Producción
              </li>
              <li class="filter btn btn-outline-success" data-nombre="miel">
                <img src="<?php echo get_template_directory_uri( );?>/img/medalla.png" loading="lazy" alt="">
                Certificaciones</li>
            </ul>
          </div>
         
          <!--Contenido-->
          <div class="cont-text container-fluid">
            <div class="cont-work azucar">
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="card ">
                  <p><?php echo get_post_meta(get_the_ID(),'cas_homepage_text-empresa1', true); ?></p>
                    
                  </div>
                </div>

                <div class="col-md-6 col-12 ">
                  <div class="card ">
                 <p> <?php echo get_post_meta(get_the_ID(),'cas_homepage_text-empresa2', true); ?>
                 </p>
                  </div>
                </div>

              </div>
            </div>
            <!--Fin Azucar-->
       
            <!--Fin Caña-->
            <div class="cont-work energia">
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="card">
                    <p>
                    <?php echo get_post_meta(get_the_ID(),'cas_homepage_text-produccion1', true); ?>
                    </p>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                  <div class="card">
                    <p>
                    <?php echo get_post_meta(get_the_ID(),'cas_homepage_text-produccion2', true); ?>
                    </p>
                  </div>
                </div>


              </div>


            </div>
            <!--Fin energia-->
            <div class="cont-work miel">
              <div class="row">
                <div class="col-md-12 card-certificaciones">
                  <div class="card flex-row flex-wrap" style="max-width:25rem;">
                   <img src="<?php echo get_post_meta(get_the_ID(),'cas_homepage_certifi-img1', true); ?>" loading="lazy" alt="">
                   <img src="<?php echo get_post_meta(get_the_ID(),'cas_homepage_certifi-img2', true); ?>" loading="lazy" alt="">
                   <img src="<?php echo get_template_directory_uri( );?>/img/BPM.jpg" loading="lazy" alt="">
                    <img src="<?php echo get_template_directory_uri( );?>/img/resize.jpg" loading="lazy" alt="">
                  </div>
                </div>

           


              </div>


            </div>
          </div>
          </main>
        </section>

        <?php endwhile; ?>
        <!--aside-->
     
        <?php get_sidebar(); ?>

      </div>
    </div>
    






 
<?php get_footer();?>

