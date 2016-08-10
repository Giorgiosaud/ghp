<?php 

get_header(); ?>

<div class="backgroundPicture" <?php if(has_post_thumbnail()):?>
	style="background:url(<?php the_post_thumbnail_url('full')?>)">
	<?php else:?>
	style="background:url(<?= get_template_directory_uri();?>/img/bg-image-inner.jpg)">
	<?php endif ?>
	<div class="headerInner">
		<div class="Logo">
			<?php the_custom_logo()?>
		</div>
		<div id="dl-menu" class="dl-menuwrapper">
			<button class="dl-trigger">Open Menu</button>
			<?php callMenu('main-menu')?>
		</div><!-- /dl-menuwrapper -->

	</div>
	<article class="container contenidoInterno">
		<div class="row">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="TituloInterno col-xs-12 col-md-5">
				<?php the_title()?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 contenidoInterno__Contenido">
				<?php the_content()?>
			</div>
			<div class="col-xs-12 col-md-6 contenidoInterno__Foto">
				<div class="contenidoInterno__ImagenyColores">
					<div class="contenidoInterno__Imagen">
						<img src="<?php the_field('imagen_interna')?>" class="img-fluid" alt="Imagen Interna">
					</div>
					
					<div class="contenidoInterno__Colores">
						<?php
						if( have_rows('colores') ):
							while ( have_rows('colores') ) : the_row();?>
							<div class="contenedorInterno__Color">
								<div class="contenedorInterno__Color__Muestra">
									<img src="<?php the_sub_field('color')?>" class="img-fluid" alt="color">
								</div>
								<div class="contenedorInterno__Color__Nombre">
									<?php the_sub_field('nombre')?>
								</div>
							</div>
<?php
							endwhile;
						endif;

					?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Bottom Nav-->
			<?php $prev_post = get_previous_post(); ?>
			<div class="post-prev indicators col-xs-6">
				<?php if ( !empty( $prev_post ) ) : ?>  
				<a href="<?php echo get_permalink( $prev_post->ID ); ?>"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> <?php _e('Anterior','ghp')?></a>
				<?php endif; ?>
			</div>
			<?php $next_post = get_next_post(); ?>
			<div class="post-next indicators col-xs-6">
				<?php if ( !empty( $next_post ) ) : ?>  
				<a  href="<?php echo get_permalink( $next_post->ID ); ?>"> <?php _e('Siguiente','ghp')?> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
				<?php endif; ?>
			</div>
			<!--/Bottom Nav-->
		</div>
	</div>
</article>
<?php endwhile; ?>
<?php else: ?>
<article>

	<h2><?php _e( 'Sorry, nothing to display.', 'ghp' ); ?></h2>

</article>
</div>


<?php endif; ?>
<?php get_footer(); ?>
