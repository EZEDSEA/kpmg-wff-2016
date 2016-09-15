

	
	<?php if ( is_front_page() ) { ?>

		<footer class="footer--home">
			<div class="wrapper">
				<p><?php the_field('disclaimer', 'options'); ?></p>
			</div>
		</footer>

	<?php } else { ?>

		<footer class="footer--steps">
			<div class="kpmg-disclaimer">
				<div class="wrapper">
					<div class="kpmg-disclaimer--container">
						<p><?php the_field('kpmg_disclaimer', 'options'); ?></p>
					</div>
				</div>
			</div>
		</footer>


	<?php } ?>  	

</footer>


<?php wp_footer(); ?>
</body>
</html>