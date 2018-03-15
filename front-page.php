<?php
/**
 * The front page template file
 *
 * @package focus
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile;

		endif; ?>

		</main>
	</div>

	<?php get_template_part( 'partials/sub', 'pages' ); ?>

	<?php get_template_part( 'partials/get', 'faqs' ); ?>

<?php
get_footer();
