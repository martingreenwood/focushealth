<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package focus
 */

?>

<div class="row locations">
	<?php 
	if( have_rows('offices', 'options') ):
	while ( have_rows('offices', 'options') ) : the_row();
		?>
		<div class="office columns four">
			<?php 
			$location = get_sub_field('map');
			if( !empty($location) ):
			?>
			<center>
			<div class="map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			</div>
			<?php endif; ?>

			<div class="deets">
				<?php the_sub_field( 'details' ); ?>
			</div>
			</center>
		</div>
		<?php
	endwhile;
	endif;
	?>
</div>

<div class="row">
	<article id="post-<?php the_ID(); ?>" <?php post_class('columns twelve'); ?> style="border:0;padding:0;">

		<div class="entry-content">
			<?php
				the_content();
			?>
			<a href="<?php echo home_url( '/appointments' ); ?>" class="button">BOOK AN APPOINTMENT</a>
		</div>

	</article>
</div>