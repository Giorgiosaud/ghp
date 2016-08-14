<?php 
/*
 * Template name: Pagina Colores
 * */
get_header(); ?>

<div class="backgroundPicture" <?php if(has_post_thumbnail()):?>
	style="background:url(<?php the_post_thumbnail_url('full')?>)">
<?php else:?>
	style="background:url(<?= get_template_directory_uri();?>/img/bg-image-inner.jpg)">
<?php endif ?>
<article class="container contenidoInterno">
	<div class="row">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="TituloInterno col-xs-12 col-md-5">
				<?php the_title()?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 contenidoInterno__Foto">
				<div class="contenidoInterno__ImagenyColores">
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
	</div>
</article>
<?php endwhile; ?>
<?php else: ?>
	<article class="container contenidoInterno">
		<div class="row">
			<div class="TituloInterno col-xs-12 col-md-5">
				<?php __('La Pagina Que Buscas No Existe','ghp')?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 contenidoInterno__Contenido">
				<?php __('Por favor ve al inicio haciendo click en nuestro logo','ghp')?>
			</div>
			<div class="col-xs-12 col-md-6 contenidoInterno__Foto">
				<div class="contenidoInterno__ImagenyColores">
					<div class="contenidoInterno__Imagen">
						<img src="<?php get_template_directory_uri() ?>/img-bg-image-inner.jpg" class="img-fluid" alt="Imagen Interna">
					</div>
				</div>
			</div>
		</div>
	</article>
</div>


<?php endif; ?>
<?php get_footer(); ?>
