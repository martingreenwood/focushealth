<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package focus
 */

?>

	</div><!-- #content -->

	<footer id="prefooter">
		
		<div class="container">

			<div class="row">

				<ul>

					<?php 
					$images = get_field('logos','options');
					$size = 'full';
					if( $images ): ?>
					<?php foreach( $images as $image ): ?>
					<li>
					<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
					</li>
					<?php endforeach; ?>
					<?php endif; ?>
					
				</ul>

			</div>

			<div class="row">

				<div class="logo">
					<?php the_custom_logo(); ?>
				</div>

				<div class="info">
					<?php the_field( 'company_info', 'options' ); ?>
				</div>

				<div class="social">
					<ul>
						<li>
							<a target="_blank" href="<?php the_field( 'twitter', 'options' ); ?>">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="<?php the_field( 'youtube', 'options' ); ?>">
								<i class="fab fa-youtube"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="<?php the_field( 'facebook', 'options' ); ?>">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="<?php the_field( 'instagram', 'options' ); ?>">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>
				
			</div>
			
		</div>

	</footer>

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<div class="container">
			
			<div class="copy">
				<p>&copy; Focus Health <?php echo date('Y'); ?>. All Rights Reserved.</p>
			</div>
			<div class="fnav">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'footer-menu',
					) );
				?>				
			</div>

		</div>

	</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
