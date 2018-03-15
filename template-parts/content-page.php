<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package focus
 */

?>

<aside class="columns four">

	<div class="entry-heading">

		<?php the_field( 'side_content' ); ?>

	</div>
	
</aside>

<article id="post-<?php the_ID(); ?>" <?php post_class('columns eight'); ?>>

	<div class="entry-content">
		<?php
			the_content();
		?>
		<a href="<?php echo home_url( '/appointments' ); ?>" class="button">BOOK AN APPOINTMENT</a>
	</div>

</article>
