<!-- Template Name: Group Registration
 -->



 <?php get_header(); ?>

  <div class="wrapper">
		<div class="step-title">
			<h2 class="uppercase">Winterfest 2016</h2>
			<h1><?php the_title(); ?></h2>
		</div>
		<div class="line--B"></div>
		<div class="container group">
			<?php get_template_part( 'loop', 'index' );	?>
		</div>

  </div>

<?php get_footer(); ?>
