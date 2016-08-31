<?php 
/*
 * Template name: Pagina Con Slider Sin Menu
 * */
get_header('sinMenu'); ?>

<div class="backgroundPicture" <?php if(has_post_thumbnail()):?>
	style="background:url(<?php the_post_thumbnail_url('full')?>)">
<?php else:?>
	style="background:url(<?= get_template_directory_uri();?>/img/bg-image-inner.jpg)">
<?php endif ?>
<article class="container contenidoInterno">
	<div class="row contenidoCentrado">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="TituloInterno col-xs-12 col-md-5">
				<?php the_title()?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 contenidoInterno__Contenido">
				<?php the_content()?>
			</div>
			<div class="col-xs-12 col-md-8 contenidoInterno__Foto">
				<div class="contenidoInterno__Galeria">
					<?php 

					$images = get_field('slider');
					$iterator=0;
					if( $images ): ?>



					<div id="Galeria" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<?php foreach( $images as $index=>$image ):?>
							<div class="carousel-item <?php if($index==0){echo 'active';}?>">
								<a href="<?php echo $image['sizes']['large']; ?>" rel="gallery" class="fancybox" title="<?php echo $image['caption']; ?>">
								<img src="<?php echo $image['sizes']['imagen_interna']; ?>" alt="<?php echo $image['alt']; ?>	">
								</a>
							</div>
							<?php endforeach; ?>

						</div>
						<a class="left carousel-control" href="#Galeria" role="button" data-slide="prev">
							<span class="icon-prev" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#Galeria" role="button" data-slide="next">
							<span class="icon-next" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				<?php endif;?>
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
