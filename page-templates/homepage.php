<?php
/**
 * Template Name: Homepage
 *
 * Template for the homepage
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="container mt-2">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'loop-templates/content', 'empty' );
	endwhile;
	?>
</div>

<?php
get_footer();
