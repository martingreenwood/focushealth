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

		<div id="booking">

			<ul class="accordion">

				<li>
					<a class="toggle" href="#">Worcester</a>
					<div class="inner">
						<!-- ScheduleOnce embed START -->
						<div id="SOIDIV_HuwRichards" data-so-page="HuwRichards" data-height="550" data-style="border: 0px solid #d8d8d8; min-width: 290px; max-width: 900px;" data-psz="00"></div>
						<script type="text/javascript" src="https://cdn.scheduleonce.com/mergedjs/so.js"></script>
						<!-- ScheduleOnce embed END -->
					</div>
				</li>

				<li>
					<a class="toggle" href="#">Birmingham</a>
					<div class="inner">
						<!-- ScheduleOnce embed START -->
						<div id="SOIDIV_BirminghamCustardFactoryOffice" data-so-page="BirminghamCustardFactoryOffice" data-height="550" data-style="border: 0px solid #d8d8d8; min-width: 290px; max-width: 900px;" data-psz="00"></div>
						<script type="text/javascript" src="https://cdn.scheduleonce.com/mergedjs/so.js"></script>
						<!-- ScheduleOnce embed END -->
					</div>
				</li>

				<li>
					<a class="toggle" href="#">Cheltenham</a>
					<div class="inner">
						<!-- ScheduleOnce embed START -->
						<div id="SOIDIV_Cheltenham" data-so-page="Cheltenham" data-height="550" data-style="border: 0px solid #d8d8d8; min-width: 290px; max-width: 900px;" data-psz="00"></div>
						<script type="text/javascript" src="https://cdn.scheduleonce.com/mergedjs/so.js"></script>
						<!-- ScheduleOnce embed END -->
					</div>
				</li>

			</ul>
			
		</div>

	</div>

</article>
