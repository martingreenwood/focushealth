<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package focus
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">

				<div class="site-branding">
					<?php if ( function_exists( 'the_custom_logo' ) ): ?>
						<?php the_custom_logo(); ?>
					<?php else: ?>
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php endif; ?>
				</div>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="hamburger menu-toggle hamburger--spin" type="button" aria-controls="primary-menu" aria-expanded="false">
						<span class="hamburger-box ">
							<span class="hamburger-inner"></span>
						</span>
					</button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav>

			</div>
		</div>
	</header>


	<section id="banner">

		<div class="images">
			<?php $base_image = get_field( 'base_image' ); $glow_image = get_field( 'glow_image' ); ?>
			<img src="<?php echo $base_image['url'] ?>" alt="">
			<div class="glow">
				<img src="<?php echo $glow_image['url'] ?>" alt="">
			</div>

			<div class="caption">
				<div class="container">
					<div class="text table <?php the_field( 'which_side' ); ?>">
						<div class="cell middle">
							<?php the_field( 'caption_content' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<div id="content" class="site-content">
