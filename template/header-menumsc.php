<div class="e-menu">
  <nav class="navbar navbar-expand-lg navbar-light">
    <?php get_template_part( 'template/header','buscador'); ?>
    <?php // get_template_part( 'template/header','menuresponsivo'); ?>
    <?php get_template_part( 'template/header','menumovil'); ?>
  </nav>
    <!-- Menu exclusivo para  moviles-->

  <!-- Menu exclusivo para excritorio mayores a de 640 pixeles al infinito -->
  <div class="or-logom">
    <?php logoMsc(); ?>
    <div class="slogan">
      <h1>Misioneros del sagrado Corazón</h1>
      <h2>Mixco, Ciudad de Guatemala</h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="contenedor-lm-msc">
        <div class="or-menum">
            <nav class="navbar-me">
              <?php showMenuboostrap(); ?>
            </nav>
        </div>
      </div>
    </div>
  </div>
</div><!-- Finaliza el div >>l e-menu -->
