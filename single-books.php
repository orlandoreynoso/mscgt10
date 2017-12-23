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
            <?php  echo  'estoy en single-book.php...';      ?>
            <?php 

/*

function create_page($pagina, $perpage){
    $args = array(
        'post_type' => 'page',
        'post_parent'       => ''.$pagina.'',
        'posts_per_page'         => ''.$perpage.'',
    );
    return $args;
}
*/

             ?>

<?php echo  $pagina_id = get_the_ID();  ?>
<?php 
//$the_query = new WP_Query(create_page($pagina_id,$perpage_actually));
 ?>


<?php 
  echo "<p>ancestro Inicio===========</p>";
  global $post;
        /* Get an array of Ancestors and Parents if they exist */
  $parents = get_post_ancestors( $post->ID );
        /* Get the top Level page->ID count base 1, array base 0 so -1 */ 
    $id = ($parents) ? $parents[count($parents)-1]: $post->ID;
  /* Get the parent and set the $class with the page slug (post_name) */
        $parent = get_post( $id );
  ?>
  <pre>
    <?php var_dump($id); ?>
  </pre>
  <?php
  echo $class = $parent->post_name;
  echo "<p>========ancestro fin</p>";
  $class02 = get_the_post_thumbnail( $parent, 'thumbnail');
  $class03 = get_the_permalink( $id);
  ?>
  <img src="<?php echo $class02; ?>" alt="">
  <a href="<?php echo $class03; ?>"><?php echo $class03; ?></a>
  <?php
  echo "<p>========ancestro fin</p>";
 ?>

<?php 


if (have_posts()) :
   while (have_posts()) : the_post();
     // the_content();
    ?>
    <pre>
    <?php
      //echo $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");


    //$mypages = get_pages( array( get_par);
    //print_r($mypages);
    

    echo "<<<<<<<<<<<<<<<<<  <br>";

     $args = array(
  'sort_order' => 'desc',
  'sort_column' => 'post_title',
  'hierarchical' => 1,
  'exclude' => '',
  'include' => '',
  'meta_key' => '',
  'meta_value' => '',
  'authors' => '',
  'child_of' => 0,
  'parent' => -1,
  'exclude_tree' => '',
  'number' => '',
  'offset' => 0,
  'post_type' => 'books',
  'post_status' => 'publish'
); 
    $pages = get_pages($args); 

    print_r($pages);
    echo "--------------------- <hr>";
    echo $pages['0']->page_name;
    echo "****************** <hr>";
    //foreach ($pages as $term) echo $term->page_name;

foreach ($pages as $key => $value) {
  echo $key[1][4]."<br> >>";
}

      ?>
      </pre>
      <?php
   endwhile;
endif;
 
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
