<?php 
/*
 * Template name: Pagina Inicio
 * */
get_header(); ?>

<!-- section -->
	<div class="contenedorInicio">
	<div class="headerIndex">
		<div class="Logo">
			<?php the_custom_logo()?>
		</div>
		<div id="dl-menu" class="dl-menuwrapper">
			<button class="dl-trigger">Open Menu</button>
			<?php callMenu('main-menu')?>
		</div><!-- /dl-menuwrapper -->

	</div>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php the_content()?>
	<?php endwhile;endif;?>
	</div>
	<?php get_footer(); ?>
