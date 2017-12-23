<?php
/*
  Template Name: books
  Template Post Type: post, page, product, agrupaciones, books
*/
 get_header();
?>
<section class="con-general">
  <div class="container">
     <div class="row">
        <div class="col-xs-12 col-md-12 con">
          <div class="interiores">
            <div class="header-title">
              <div class="titulo">
                <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
              </div>
              <div class="titulos-page">
                <?php the_title(); ?>
              </div>
            </div>
            <?php // echo "estoy en single-reflexiones-la-voz.php..."; ?>
            <?php $pagina_id = get_the_ID(); ?>

            <?php 

             //     echo get_the_title();
            ?>
      <?php 
// in the loop:
if ( get_page_template_slug( get_the_ID() ) ){
   // Yep, this page has a page template
  echo "hola";
}

?>

            <pre>
              <?php // print_r($post); ?>
            </pre>
            <?php //  echo "postio"; ?>
            <?php // echo $post->post_name; ?>
            <div class="agrupaciones-desglose"><!-- Inicio id agrupaciones-desglose -->
              <?php
              //  if(!is_page('la-voz')){

              ?>
              <div class="c-agrupaciones">
                <?php $the_query = new WP_Query(contenidosPorId('any',$pagina_id,-1)); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                <?php get_template_part('template/contenido','ancestro' ); ?>
                <?php endwhile;?>
              </div>
            </div><!-- fin id agrupaciones-desglose -->
            <?php  /*}
            else{
              echo "No es la voz";
            }*/
            ?>
          </div>
       </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>
