

	<?php if ( is_front_page() ) { ?>

		<footer class="footer--home">
			<div class="wrapper">
				<?php the_field('disclaimer', 'options'); ?>
			</div>
		</footer>

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
