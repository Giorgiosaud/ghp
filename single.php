<?php 

get_header(); ?>

<div class="backgroundPicture" <?php if(has_post_thumbnail()):?>
	style="background:url(<?php the_post_thumbnail_url('full')?>)">
<?php else:?>
	style="background:url(<?= get_template_directory_uri();?>/img/bg-image-inner.jpg)">
<?php endif ?>
<article class="container contenidoInterno">
	<?php if (have_posts()): while (have_posts()) : the_post();
	$tituloActual=get_the_title();
	$fotoActual=get_field('imagen_interna');
	$next_post = get_next_post();
	$prev_post = get_previous_post();
	if ( !empty( $next_post ) ):
		$tituloSiguiente=get_the_title($next_post);
	$fotoSiguiente=get_field('imagen_interna',$next_post);
	endif;?>
	<div class="row noMP">
		<div class="Ventana col-xs-12 col-md-5 noMP">
			<div class="row">
				<div class="TituloInterno col-xs-11">
					<?= $tituloActual ?>
				</div>
			</div>
			<div class="row">

				<div class="col-xs-12 contenidoInterno__Foto">
					<div class="contenidoInterno__ImagenyColores">
						<div class="contenidoInterno__Imagen">
							<img src="<?= $fotoActual ?>" class="img-fluid" alt="Imagen Interna">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="Ventana col-xs-12 col-md-5 col-md-push-2 noMP">
			<?php if ( !empty( $next_post ) ):?>
				<div class="row noMP">
					<div class="TituloInterno col-xs-11 col-md-push-1">
						<?= $tituloSiguiente ?>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 contenidoInterno__Foto">
						<div class="contenidoInterno__ImagenyColores">
							<div class="contenidoInterno__Imagen">
								<img src="<?= $fotoSiguiente ?>" class="img-fluid" alt="Imagen Interna">
							</div>
						</div>
					</div>
				</div>
			<?php endif ?>
		</div>
	</div>
	<div class="row">
		<!-- Bottom Nav-->
		<div class="post-prev indicators col-xs-6">
			<?php if ( !empty( $prev_post ) ) : ?>  
				<a href="<?php echo get_permalink( $prev_post->ID ); ?>"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> <?php _e('Anterior','ghp')?></a>
			<?php endif; ?>
		</div>
		<div class="post-next indicators col-xs-6">
			<?php if ( !empty( $next_post ) ) : ?>  
				<a  href="<?php echo get_permalink( $next_post->ID ); ?>"> <?php _e('Siguiente','ghp')?> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
			<?php endif; ?>
		</div>
		<!--/Bottom Nav-->
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
