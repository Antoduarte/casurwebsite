<?php get_header();?>


<section class="container-fluid d-flex  hero align-items-center justify-content-center  mt-3" style="background: url(<?php echo get_the_post_thumbnail_url( );?>);">
<h2 class="text-white"><?Php the_title( )?></h2>
</section>


<section class="botones container">

<div class="botones-work mt-5">
            <ul class="d-flex justify-content-around">
              <li class="filter active btn btn-outline-success" data-nombre="azucar">

              CAMPO

              </li>
              <li class="filter btn btn-outline-success" data-nombre="cosecha">
                
               COSECHA
              </li>
              <li class="filter btn btn-outline-success" data-nombre="fabrica">

              FABRICA
              </li>
                <li class="filter btn btn-outline-success" data-nombre="distribucion">

                EMPAQUE Y DISTRIBUCION

              </li>
              <li class="filter btn btn-outline-success" data-nombre="energia">

              ENERGIA

        </li>
          </div>
</section>

<section class="container-fluid proceso mb-5">
     <!-- primer boton-->
<articule class="cont-work azucar container">
         <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card mb-3" >
                   <div class="card-header bg-success text-white text-center text-uppercase">Siembra</div>
                  <div class="card-body" style=" height:200px;">
                
                  <p class="card-text">El cultivo de la caña de azúcar, ha sido una de las actividades agroindustriales más importantes del país, teniendo en cuenta el área sembrada, la generación de empleo y la importancia de todos los productos derivados del proceso.</p>
                 </div>
               </div>
            </div>

                <div class="col-lg-4 col-md-6 col-12 ">
                <div class="card  mb-3" >
                   <div class="card-header bg-success text-white text-center text-uppercase">Adecuación de Campo</div>
                  <div class="card-body"style=" height:200px;">
                
                  <p class="card-text">El Proceso se inicia con la adecuación del campo y el estudio del suelo, teniendo en cuenta la topografía del terreno, y de acuerdo a ella se localizan canales de riego, drenaje y vías de acceso. El suelo se rotura haciendo uso de maquinaria y equipos especializados, dejándolo en adecuadas condiciones para la siembra.</p>
                   </div>
                 </div>
               </div>
      
                <div class="col-lg-4 col-md-6 col-12">
                <div class="card mb-3" >
                   <div class="card-header bg-success text-white text-center text-uppercase">Riego</div>
                  <div class="card-body " >
                  
                  <p class="card-text">El cultivo de la caña requiere agua en la cantidad y forma oportuna para alcanzar una buena producción. En CASUR, hemos optimizado la distribución y aplicación eficiente del agua, mediante sistemas de riego por gravedad, surcos o aspersión simulando lluvia. Y desarrollamos técnicas de programación del riego por balance hídrico haciendo más eficiente el uso del agua.</p>
               </div>
               </div>
             </div>

          </div>
       </articule >
  <!--Fin primer boton-->
       
              <!--segundo boton-->
          <articule class="cont-work cosecha  container">
              <div class="row justify-content-center align-items-center">
                <div class=" col-md-4 col-12">
                <div class="card mb-3" >
                   <div class="card-header bg-success text-white text-center text-uppercase">Corte</div>
                  <div class="card-body" style=" height:150px;">
                
                  <p class="card-text">El corte se realiza manual o mecánicamente, utilizando parámetros de calidad que disminuyen los porcentajes de materia extraña.</p>
               </div>
               </div>
                </div>

                <div class="col-md-4 col-12 ">
                <div class="card  mb-3" >
                   <div class="card-header bg-success text-white text-center text-uppercase">Transporte a Fábrica</div>
                  <div class="card-body"style=" height:150px;">
                
                  <p class="card-text">Una vez cortada la caña, es alzada mecánicamente del campo y transportada a fábrica en tractores con los menores tiempos de permanencia.</p>
                 </div>
                  </div>
                 </div>

              </div>
            </articule>
               <!--tercer boton-->
               <articule class="cont-work fabrica container">
              <div class="row justify-content-center align-items-center">
                <div class=" col-md-4 col-12">
                <div class="card mb-3">
                   <div class="card-header bg-success text-white text-center text-uppercase">Extracción del jugo</div>
                  <div class="card-body" style=" height:170px;">
                
                  <p class="card-text">Seguidamente la caña es descargada en las mesas transportadoras para pasar a las picadoras y desfibradoras, que la convierten en pequeños trozos facilitando la extracción del jugo en los molinos. Es aquí cuando comienza la fase de molienda, a través de un tándem de molinos que extraen el jugo de caña.</p>
               </div>
               </div>
                </div>

                <div class="col-md-4 col-12 ">
                <div class="card  mb-3">
                   <div class="card-header bg-success text-white text-center text-uppercase">Purificación del jugo</div>
                  <div class="card-body">
                
                  <p class="card-text">En esta etapa se agrega agua caliente para obtener la máxima cantidad de sacarosa en un proceso llamado maceración. El jugo obtenido es colado iniciando la primera etapa de calentamiento facilitando la sedimentación de sólidos insolubles y separándolos del jugo claro que queda en la parte superior del clarificador, los cuales son llevados a los filtros rotatorios al vacío para la recuperación de su contenido de sacarosa.</p>
                 </div>
                  </div>
                 </div>

                 <div class="col-md-4 col-12 ">
                <div class="card  mb-3">
                   <div class="card-header bg-success text-white text-center text-uppercase">Concentración del jugo</div>
                  <div class="card-body"style=" height:170px;">
                
                  <p class="card-text">Una vez cortada la caña, es alzada mecánicamente del campo y transportada a fábrica en tractores con los menores tiempos de permanencia.</p>
                 </div>
                  </div>
                 </div>
                 <div class="col-md-4 col-12 ">
                <div class="card  mb-3">
                   <div class="card-header bg-success text-white text-center text-uppercase">Cristalización</div>
                  <div class="card-body"style=" height:150px;">
                
                  <p class="card-text">Es en los tachos donde se produce la masa cocida conformada por cristales de azúcar y miel.</p>
                 </div>
                  </div>
                 </div>

                 <div class="col-md-4 col-12 ">
                <div class="card  mb-3">
                   <div class="card-header bg-success text-white text-center text-uppercase">Centrifugación, Refinación y Secado</div>
                  <div class="card-body"style=" height:150px;">
                
                  <p class="card-text">La masa cocida pasa a centrífugas de alta velocidad que separaran los cristales de azúcar del licor madre. Durante este proceso, el azúcar es lavado para retirar los residuos de miel y posteriormente ser secado y enfriado.</p>
                 </div>
                  </div>
                 </div>
              </div>
            </articule>
             <!--cuarto boton-->
       
             <articule class="cont-work distribucion  container">
              <div class="row justify-content-center align-items-center">
                <div class=" col-md-4 col-12">
                <div class="card mb-3" >
                   <div class="card-header bg-success text-white text-center text-uppercase">Empaque</div>
                  <div class="card-body" style=" height:190px;">
                
                  <p class="card-text">Una vez el azúcar esté seco y frío, es empacado en sacos de 50 kg para satisfacer a nuestros clientes nacionales e internacionales. En CASUR producimos y comercializamos varios tipos de Azúcar Blanco y Crudo para satisfacer las necesidades de sus clientes.</p>
               </div>
               </div>
                </div>

                <div class="col-md-4 col-12 ">
                <div class="card  mb-3" >
                   <div class="card-header bg-success text-white text-center text-uppercase">Almacenamiento y Despacho</div>
                  <div class="card-body">
                
                  <p class="card-text">El azúcar, finalmente es almacenado por lotes de producción, posteriormente listo para su distribución donde del total de nuestra producción 60% es para abastecer el mercado nacional y un 40% para el mercado internacional. Nuestro azúcar es una fuente natural de sabor para toda clase de productos de panadería, galletería, chocolatería, dulcería, jugos, alimentos, bebidas y lácteos.</p>
                 </div>
                  </div>
                 </div>

              </div>
            </articule>

            <!--quinto boton-->
       
            <articule class="cont-work energia container">
              <div class="row justify-content-center align-items-center">
                <div class=" col-md-4 col-12">
                <div class="card mb-3" >
                   <div class="card-header bg-success text-white text-center text-uppercase">Lorem</div>
                  <div class="card-body" style=" height:215px;">
                
                  <p class="card-text"></p>
               </div>
               </div>
                </div>

                <div class="col-md-4 col-12 ">
                <div class="card  mb-3" >
                   <div class="card-header bg-success text-white text-center text-uppercase">Lorem</div>
                  <div class="card-body" style=" height:215px;">
                
                  <p class="card-text"></p>
                 </div>
                  </div>
                 </div>

              </div>
            </articule>
</section>

<?php get_footer();?>