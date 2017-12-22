<?php

/*
Template Name: Single books
Template Post Type: post, page, books
 */

 get_header();

?>

<?php /*==============================*/ ?>

<section class="con-general">
  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-8 con">
          <div class="interiores">
            <div class="header-title">
              <div class="titulo">
                <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
              </div>
              <div class="titulos-page">
                <?php the_title(); ?>
              </div>
            </div>
            <?php  echo  'estoy en single-book.php';      ?>

<?php echo  $pagina_id = get_the_ID();  ?>
<?php 


//echo $datito = get_post_permalink();

 
$args = array(
    'post_type' => 'books',
    'post_status' => 'publish',    
);
 
// Custom query.
$query = new WP_Query( $args );
 
// Check that we have query results.
if ( $query->have_posts() ) {
 
    // Start looping over the query results.
    while ( $query->have_posts() ) {
 
        $query->the_post();
 
        // Contents of the queried post results go here.
 
    }
 
}
 
// Restore original post data.
wp_reset_postdata();
 
?>


          </div>
       </div>
        <div class="col-xs-12 col-md-4 side">
          <div class="entradas">
            <div class="titulo_entradas">
              <h3>Entradas recientes</h3>
            </div>
            <div class="recientes">
              <?php get_sidebar(); ?>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

<?php  /*============ fin fin ===================*/ ?>

<?php
  get_footer();
?>
