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
				<div class="BotonesContactos">
					<div class="BotonContacto BotonesContactos__Email">
						<div class="BotonContacto_Icono BotonesContactos__Email__Icono"><img src="<?php echo get_template_directory_uri();?>/img/email.png" alt="email"></div>
						<div class="BotonContacto_Contenido BotonesContactos__Email__Correo"><a href="<?php the_field('email','option')?>"><?php the_field('email','option')?></a></div>
					</div>
					<div class="BotonContacto BotonesContactos__Telefono">
						<div class="BotonContacto_Icono BotonesContactos__Telefono__Icono"><img src="<?php echo get_template_directory_uri();?>/img/Telefono.png" alt="Telefono"></div>
						<div class="BotonContacto_Contenido BotonesContactos__Telefono__Correo"><a href="tel<?php the_field('telefono_sin_formato','option')?>"><?php the_field('telefono_con_formato','option')?></a></div>
					</div>
					<div class="BotonContacto BotonesContactos__Direccion">
						<div class="BotonContacto_Icono BotonesContactos__Direccion__Icono"><img src="<?php echo get_template_directory_uri();?>/img/Direccion.png" alt="Direccion"></div>
						<div class="BotonContacto_Contenido BotonesContactos__Direccion__Correo"><a href="<?php the_field('direccion_link','option')?>"><?php the_field('direccion','option')?></a></div>
					</div>
				</div>
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
					<div class="Formulario FormularioDCV hidden noShow">
						<?php the_field('ventanas_dueno_de_casa')?>
					</div>
					<div class="Formulario FormularioEV hidden noShow ">
						<?php the_field('ventanas_especialista')?>
					</div>
					<div class="Formulario FormularioEJV hidden noShow">
						<?php the_field('jardines_especialista')?>
					</div>
					<div class="Formulario FormularioDCJV hidden noShow">
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
