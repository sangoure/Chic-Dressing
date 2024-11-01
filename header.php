<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	
	<meta name="discription" content= "Explorez notre boutique en ligne pour des pièces de créateur uniques. Découvrez des articles en vente,
	 des prix cassés sur des marques de luxe. Trouvez votre style intemporel pour toutes les saisons."/>
	
	
	 <meta name="keywords" content="pièces de createue,
		achat-vente, prix cassés, 
		marque de luxe, chic dressing, mode ,
		collection, autone, hiver, printemps,
		été, création, cosmétique, pantalon, jupe, 
		robe, monteau, petites prix. "/>
		
	<meta name="author" content="Sarah">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="style.css" load="lazy">

	<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">

	<meta name="title" content="Bienvenue sur chic Drissing - la mode avant tout !">
	
	<title>Bienvenue sur Chic Drissing - la mode avant tout ! </title>

	<meta name="author" content="sarah"/>
	

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		} else {
			do_action( 'wp_body_open' );
		}
		?>

	<!-- Preloader -->
	<?php get_template_part( 'templates/header/preloader' ); ?>

	<!-- Page Wrapper -->
	<div id="page-wrap">

	<!-- Boxed Wrapper -->
	<div id="page-header" <?php echo esc_attr(ashe_options( 'general_header_width' )) === 'boxed' ? 'class="boxed-wrapper"': ''; ?>>

	<?php

	// Top Bar
	get_template_part( 'templates/header/top', 'bar' );

	// Page Header
	get_template_part( 'templates/header/page', 'header' );

	// Main Navigation
	get_template_part( 'templates/header/main', 'navigation' );
	
	?>

			</div><!-- .boxed-wrapper -->

			<!-- Page Content -->
			<div class="page-content">

			<?php // Featured Slider and Links
			$post_meta = get_post_meta(get_the_ID());

			if ( is_front_page() && (isset($post_meta['_wp_page_template']) && 'elementor_header_footer' === $post_meta['_wp_page_template'][0]) ) {

				// Featured Slider, Carousel
				if ( ashe_options( 'featured_slider_label' ) === true && ashe_options( 'featured_slider_location' ) !== 'blog' ) {
					if ( ashe_options( 'featured_slider_source' ) === 'posts' ) {
						get_template_part( 'templates/header/featured', 'slider' );
					} else {
						get_template_part( 'templates/header/featured', 'slider-custom' );
					}
				}

				// Featured Links, Banners
				if ( ashe_options( 'featured_links_label' ) === true && ashe_options( 'featured_links_location' ) !== 'blog' ) {
					get_template_part( 'templates/header/featured', 'links' ); 
				}

			}

			?>

			<?php get_template_part( 'templates/sidebars/sidebar', 'alt' ); // Sidebar Alt ?>