<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/skin.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
	?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascript/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascript/jquery.jcarousel.min.js"></script>
	
	
	
	<script type="text/javascript">

	jQuery(document).ready(function() {
	    jQuery('#mycarousel').jcarousel({
			scroll:3,
			auto:5,
			wrap:"both"
		});
	});

	</script>
	
	
</head>
	<a name="menu"></a>

  <body <?php body_class(); ?>>
    
	<div class="centralizarCorpo content">
		<div class="header">
			<div class='img_header_detalhe img_header_detalhe_size'>
				<div class="img_header_logo_jzconsultoria img_header_logo_jzconsultoria_size"></div>
				<div class="img_header_consultoria_treinamento img_header_consultoria_treinamento_size"></div>
			</div>
			<div class="img_header_menu img_header_menu_size"></div>
			<div class="img_header_line img_header_line_size"></div>
			<div class="menu">
				<a class="bt_empresa" href="#empresa"><div class="img_header_bt1 img_header_bt1_size"></div></a>
				<a class="bt_consultoria" href="#consultoria"><div class="img_header_bt2 img_header_bt2_size"></div></a>
				<a class="bt_treinamentos" href="#treinamento"><div class="img_header_bt3 img_header_bt3_size"></div></a>
				<a class="bt_clientes" href="#clientes"><div class="img_header_bt4 img_header_bt4_size"></div></a>
				<a class="bt_contato" href="#contato"><div class="img_header_bt5 img_header_bt5_size"></div></a>
			</div>
		</div>