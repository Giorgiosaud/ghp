<?php 
/*
 * Template name: Pagina Interna
 * */
get_header(); ?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


<!-- section -->
	<div class="contenedorInicio">
		<!--		<?php the_custom_logo();?>-->
	</div>
	<?php get_footer(); ?>
