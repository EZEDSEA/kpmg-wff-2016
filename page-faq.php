<!-- Template Name: FAQ
 -->



 <?php get_header(); ?>

	  		<div class="faq-title">
  				<h2 class="uppercase">Winterfest 2016</h2>
			</div>
			<div class="line--B"></div>

			<section class="faq">
				<div class="wrapper">

					<h3><?php the_title(); ?></h3>

					<?php if( have_rows('questions') ): ?>

						<?php while( have_rows('questions') ): the_row(); ?>

							<div class="question--container">
								<div class="question">
									<span class="triangle"></span>
									<h4><?php the_sub_field('question'); ?></h4>
									<p><?php the_sub_field('answer'); ?></p>
								</div>
							</div>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>
			</section>

<?php get_footer(); ?>
