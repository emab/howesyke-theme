<?php
/**
* Template Name: Contact
*
*/
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header(); ?>
<div class="container firstdiv">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 font-weight-light">
					<h1 class="text-center">Contact Us</h1>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-lg-10 offset-lg-1">
					<p class="text-center lead">We'd love to hear from you! Please use the form or details below to get in touch with us, we will get back to you as soon as we can.</p>
				</div>
			</div>
			<div class="row mt-4 text-center">
				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">Robert Brown</div>
						<div class="card-body">
							<p class="card-text">Mobile: <a href="tel:<?php the_field('rob-mobile') ?>"><?php the_field('rob-mobile') ?></a></p>
							<p class="card-text">Email: <a href="mailto:<?php the_field('rob-email') ?>"><?php the_field('rob-email') ?></a></p>
						</div>
					</div>
				</div>
				<div class="col-12 mt-3 col-lg-6 mt-lg-0">
					<div class="card">
						<div class="card-header">Helen Brown</div>
						<div class="card-body">
							<p class="card-text">Mobile: <a href="tel:<?php the_field('helen-mobile') ?>"><?php the_field('helen-mobile') ?></a></p>
							<p class="card-text">Email: <a href="mailto:<?php the_field('helen-email') ?>"><?php the_field('helen-email') ?></a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-lg-5">
				<div class="col-12 col-lg-6 mt-3 offset-lg-3 text-center">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8269.791534168155!2d-2.0407363299008696!3d54.25751261430507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487c123fc0435da5%3A0xea74f1a113fc60ac!2sHowe%20Syke%20Farm!5e0!3m2!1sen!2suk!4v1579802121850!5m2!1sen!2suk" width="90%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>