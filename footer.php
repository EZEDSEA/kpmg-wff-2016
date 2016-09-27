

	<?php if ( is_front_page() ) { ?>

		<footer class="footer--home">
			<div class="wrapper">
				<?php the_field('disclaimer', 'options'); ?>
			</div>
		</footer>
	<?php } else if ( is_page_template( 'page-group-registration.php' ) || is_page_template( 'page-my-info.php' ) ) { ?>
	</div>
	<footer class="footer--steps">
		<div class="kpmg-disclaimer">
			<div class="wrapper">
				<div class="kpmg-disclaimer--container">
					<?php the_field('kpmg_disclaimer', 'options'); ?>
				</div>
			</div>
		</div>
		<div class="secondary-disclaimer">
			<div class="wrapper">
				<?php the_field('disclaimer', 'options'); ?>
			</div>
		</div>
		</footer>
	</div>
	<?php } else { ?>
 		</div>
		<footer class="footer--steps">
			<div class="kpmg-disclaimer">
				<div class="wrapper">
					<div class="kpmg-disclaimer--container">
						<?php the_field('kpmg_disclaimer', 'options'); ?>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<?php } ?>


<?php wp_footer(); ?>
</body>
</html>
