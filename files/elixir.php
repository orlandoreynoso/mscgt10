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

  global $post;
        /* Get an array of Ancestors and Parents if they exist */
  $parents = get_post_ancestors( $post->ID );

print_r($parents);

$estamos = get_post($parents[0]);
?>

  <p>contenido estamos</p>
<pre>
<?php print_r($estamos);  ?>
</pre>
<p>fin de contenido estamos</p>
<?php
echo $estamos->post_title;

  echo "<p>ancestro Inicio===========</p>";
        /* Get the top Level page->ID count base 1, array base 0 so -1 */ 
    $id = ($parents) ? $parents[count($parents)-1]: $post->ID;
  /* Get the parent and set the $class with the page slug (post_name) */
        $parent = get_post( $id );
  ?>
  <pre>
    <?php var_dump($parents); ?>
  </pre>
  <?php
  echo $class = $parent->post_name;

  echo "<p>========ancestro fin</p>";
  $class02 = get_the_post_thumbnail( $parent, 'thumbnail');
  $class03 = get_the_permalink( $id);
  $titulito = $parent->post_title;
  ?>
  <img src="<?php echo $class02; ?>" alt="">
  <a href="<?php echo $class03; ?>"><?php echo $titulito; ?></a>
  <?php
  echo "<p>========ancestro fin</p>";


?>