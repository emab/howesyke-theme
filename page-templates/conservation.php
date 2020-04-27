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
    <h1>Conservation</h1>
    <div class="row mt-5">
      <div class="col-6 col-md-3 text-center">
        <p><i class="fa fa-tree fa-2x"></i></p>
        <p class="odometer" style="font-size: 25pt" id="odometer1">0</p>
        <input type=hidden id="tree-number" name="tree-number" value="<?php the_field('tree-number') ?>" />
        <p>Trees planted in the last 10 years.</p>
      </div>
      <div class="col-6 col-md-3 text-center">
        <p><i class="fa fa-leaf fa-2x"></i></p>
        <p class="odometer" style="font-size: 25pt" id="odometer2">0</p>
        <input type=hidden id="hedge-number" name="hedge-number" value="<?php the_field('hedgerow-number') ?>" />
        <p>Miles of hedgerows repaired and replanted.</p>
      </div>
      <div class="col-6 col-md-3 text-center">
        <p><i class="fa fa-repeat fa-2x"></i></p>
        <p class="odometer" style="font-size: 25pt" id="odometer3">0</p>
        <input type=hidden id="moorland-number" name="moorland-number" value="<?php the_field('moorland-number') ?>" />
        <p>acres of moorland regenerated.</p>
      </div>
      <div class="col-6 col-md-3 text-center">
        <p><i class="fa fa-bolt fa-2x"></i></p>
        <p style="font-size: 25pt"><span class="odometer" id="odometer4">0</span>kW</p>
        <input type=hidden id="electric-number" name="electric-number" value="<?php the_field('electricity-number') ?>" />
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

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/odometer.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/odo.js"></script>
<?php get_footer();
