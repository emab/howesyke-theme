<?php

/**
 * Template Name: Conservation
 *
 * Template for the conservation page.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper" id="full-width-page-wrapper">

  <div class="<?php echo esc_attr($container); ?>" id="content">

    <div class="row mt-5">
      <div class="col-6 col-md-3 text-center">
        <p><i class="fas fa-tree fa-2x"></i></p>
        <p class="odometer" style="font-size: 25pt" id="odometer1">0</p>
        <input type=hidden id="tree-number" name="tree-number" value="1" />
        <p>Trees planted in the last 10 years.</p>
      </div>
      <div class="col-6 col-md-3 text-center">
        <p><i class="fas fa-leaf fa-2x"></i></p>
        <p class="odometer" style="font-size: 25pt" id="odometer2">0</p>
        <input type=hidden id="hedge-number" name="hedge-number" value="1" />
        <p>Miles of hedgerows repaired and replanted.</p>
      </div>
      <div class="col-6 col-md-3 text-center">
        <p><i class="fas fa-redo-alt fa-2x"></i></p>
        <p class="odometer" style="font-size: 25pt" id="odometer3">0</p>
        <input type=hidden id="moorland-number" name="moorland-number" value="1" />
        <p>acres of moorland regenerated.</p>
      </div>
      <div class="col-6 col-md-3 text-center">
        <p><i class="fas fa-bolt fa-2x"></i></p>
        <p style="font-size: 25pt"><span class="odometer" id="odometer4">0</span>kW</p>
        <input type=hidden id="electric-number" name="electric-number" value="1" />
        <p>of electricity produced.</p>
      </div>
    </div>

    <div class="row">

      <div class="col-md-12 content-area" id="primary">

        <main class="site-main" id="main" role="main">
          <?php
          while (have_posts()) :
            the_post();
            get_template_part('loop-templates/content', 'empty');
          endwhile;
          ?>
        </main><!-- #main -->

      </div><!-- #primary -->

    </div><!-- .row end -->

  </div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer();
