<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!--	<meta name="description" content="<?php bloginfo('description'); ?>">-->
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>

<body <?php body_class(); ?>>

<div class="headerInner container-fluid">
	<div class="Logo">
		<?php the_custom_logo()?>
	</div>
	<div class="boton">
		<a href="<?php the_field('link_boton_contacto','option')?>" class="btn btn-primary btn-ghp btn-sm">Contáctanos</a>
	</div>
	<div class="boton">
		<a href="tel:<?php the_field('telefono_sin_formato','option')?>" class="btn btn-primary btn-ghp btn-sm"><?php the_field('telefono_con_formato','option')?></a>
	</div>
	<div id="dl-menu" class="dl-menuwrapper">
		<button class="dl-trigger">Open Menu</button>
		<?php callMenu('main-menu')?>
	</div><!-- /dl-menuwrapper -->

</div>