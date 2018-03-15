	<section id="faqs">

		<div class="container">

			<div class="row">

				<div class="four columns">

					<div class="faq-content">
						<?php the_field( 'faq_intro', 'options' ); ?>
					</div>

				</div>

				<div class="eight columns">
						
					<ul class="accordion">

						<?php
						if( have_rows('questions', 'options') ):
						while ( have_rows('questions', 'options') ) : the_row();
							?><li>
								<a class="toggle" href="#"><?php the_sub_field('question'); ?></a>
								<div class="inner">
									<?php the_sub_field('answer'); ?>
								</div>
							</li><?php
						endwhile;
						endif;

						?>

					</ul>

				</div>

			</div>
			
		</div>
		
	</section>