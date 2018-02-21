<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed container-fluid">

<header id="header" role="banner" class="row align-items-center">
	<div class="container">
		<div class="row align-items-center">

			<section id="branding" class="col-8 col-md-auto mr-auto">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
					<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
				</a>
			</section>
			
			<div class="col-auto d-lg-none">
				<i class="material-icons menu-toggle">menu</i>
			</div>
			
			<nav id="menu" role="navigation" class="col-12 col-lg-auto d-none d-lg-flex ">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
			
		</div>
	</div>
</header>



<main id="container" class="row">