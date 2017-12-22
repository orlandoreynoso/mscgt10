<?php

/*
Template Name: Single reflexiones
Template Post Type: post, page, product, peregrinaciones, boletines, pastorales, reflexiones
 */

 get_header();
 //$current_fp = get_query_var('fpage');
?>

 <section class="contenido-home">
   <div class="container">
     <div class="row">
         <div class="col-xs-12 col-md-8 contenido-general">

        <!-- ************** CONTENIDO DESPLEGABLE PARA EL BLOG ***  -->

  <article class="conten">
          <div class="header-title">
              <div class="titulo">
                <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
              </div>
              <div class="titulos-page">
                <?php the_title(); ?>
              </div>
           </div>
<!-- *********************************** -->
    <?php echo "Desde el single de books .....ok"; ?>

     <div class="contenido">
            <!-- div class="date-cat">
              <div class="row">
                  <div class="col-xs-12 col-md-6 fecha"><i class="icon-date fa fa-calendar"></i><?php //  the_time('j F, Y'); ?></div>
                  <div class="col-xs-12 col-md-6 descripcion_categoria"><i class="icon-file fa fa-file"></i><a class="cat"><?php // the_category (' , '); ?></a></div>
              </div>
            </div -->
            <div class="info">
	         <?php while ( have_posts() ) : the_post();  ?>

<?php
echo "<p><b>Ciudad: </b>" . get_post_meta( get_the_ID(), 'info_ref_dato_reflexion', true ) . "</p>";
?>

<?php
echo "<p><b>Ciudad: </b>" . get_post_meta( get_the_ID(), 'info_ref_date_reflexion', true ) . "</p>";
?>

<?php
echo "<p><b>Ciudad: </b>" . get_post_meta( get_the_ID(), 'info_ref_datetwo_reflexion', true ) . "</p>";
?>

              <div class="hora-comida">
        <?php echo get_the_term_list( $post->ID, 'tipo-reflexion', "Hora de Comida: ", ', ',''); ?>
    </div>

            <div class="p-galeria"><?php the_content(); ?></div>
        
<?php      endwhile;         ?>
            </div>
      </div>
<!-- **************************************** -->
  </article>

        <!-- ************** FIN DEL CONTENIDO BLOG ***************  -->

         </div>
        <div class="col-xs-12 col-md-4 contenido-laterales">
          <?php // include (TEMPLATEPATH . '/libs/lateral.php'); ?>
        </div>
     </div>
   </div>
 </section>

<?php
  get_footer();
?>
