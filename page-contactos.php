<?php 
/*
 * Template name: Pagina Contactos
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
			<div class="col-xs-12 col-md-6 contenidoInterno__Contenido">
				<?php the_content()?>
			</div>
			<div class="col-xs-12 col-md-6 contenidoInterno__Formulario">
				<div class="contenidoInterno__Formulario__Titulo">
					<h4><?php _e('¿Que Tipo de Producto Necesita?')?></h4>
				</div>
				<div class="contenidoInterno__Formulario__selectorTipoProducto">
					<label class="form-check-inline">
						<input class="form-check-input" type="radio" name="Producto" id="inlineRadio1" value="V"> 	
						<span>Ventanas</span>
					</label>
					<label class="form-check-inline">
						<input class="form-check-input" type="radio" name="Producto" id="inlineRadio2" value="JV"><span>Jardines Verticales</span>
					</label>
				</div>
				<div class="TipoCliente hidden">
					<div class="contenidoInterno__Formulario__Titulo">
						<h4><?php _e('¿Que Tipo de Cliente Eres?')?></h4>
					</div>
					<div class="contenidoInterno__Formulario__selectorTipoCliente">
						<label class="form-check-inline">
							<input class="form-check-input" type="radio" name="TipoDeCliente" id="inlineRadio3" value="DC"> 	
							<span>Dueño de Casa</span>
						</label>
						<label class="form-check-inline">
							<input class="form-check-input" type="radio" name="TipoDeCliente" id="inlineRadio4" value="E"><span>Especialista</span>
						</label>
					</div>
				</div>
				<div class="Formularios">
					<div class="Formulario FormularioDCV hidden">
						<?php the_field('ventanas_dueno_de_casa')?>
					</div>
					<div class="Formulario FormularioEV hidden">
						<?php the_field('ventanas_especialista')?>
					</div>
					<div class="Formulario FormularioEJV hidden">
						<?php the_field('jardines_especialista')?>
					</div>
					<div class="Formulario FormularioDCJV hidden">
						<?php the_field('jardines_dueno_de_casa')?>
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
