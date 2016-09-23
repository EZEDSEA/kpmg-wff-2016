<!-- Template Name: Home
 -->

 <?php get_header(); ?>

 	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; ?>

 	<section class="home--main">
 		<div class="wrapper">
 			<div class="winter-logo--container">
 				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Home/winter-fast-logo.png" alt="Winter Fast Logo">
 			</div>
 			<a href="<?php echo get_home_url(); ?>/register" class="button">Register Today</a>
 			<?php if (is_user_logged_in()) { ?>
        <p class="ask-logout">
          <a href="<?php echo get_home_url(); ?>/wp-login.php?action=logout&redirect_to=https%3A%2F%2F67.225.188.14%2F%7Ekpmgwinterfest%2Fdev&_wpnonce=9bb2caa28c">Log Out</a>
        </p>
      <? } else { ?>
        <p class="ask-login">
          Already registered? <a href="<?php echo get_home_url(); ?>/login">Sign in here</a>
        </p>
      <? } ?>
 			<img class="scrollimg" src="<?php echo get_template_directory_uri(); ?>/assets/images/Home/Scroll_More.png" alt="Scroll for more information" />
 		</div>
 	</section>

 	<section class="home--intro">
 		<div class="small_wrapper">
 			<div class="intro--container flex">
 				<div class="intro--container--left">
 					<p><?php the_field('intro_text'); ?></p>
 				</div>
 				<div class="intro--container--right relative">
 					<div class="embed-container">
						<?php the_field('intro_video'); ?>
 					</div>
 				</div>
 			</div>
 			<img class="fast-forward" src="<?php echo get_template_directory_uri(); ?>/assets/images/Home/fast-forward.png" alt="Fast Forward Symbol" />
 		</div>
 	</section>

 	<section class="home--schedule">
 		<div class="small_wrapper">
 			<div class="schedule--container flex">
 				<div class="schedule--container--left">
 					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Home/schedule.png" alt="Schedule">
 				</div>
 				<div class="schedule--container--right">
 					<div class="time--box">
 						<p><span class="bold--info">6PM</span>Registration & Cocktail Reception</p>
 					</div>
 					<div class="line--A"></div>
 					<div class="time--box">
 						<p><span class="bold--info">7PM</span>Dinner</p>
 					<div class="line--A"></div>
 					</div>
 					<div class="time--box">
 						<p><span class="bold--info">9PM</span>Entertainment</p>
 					<div class="line--A"></div>
 					</div>
 					<p class="disclaimer"><?php the_field('registration_limited'); ?></p>
 				</div>
 			</div>
 		</div>
 	</section>

 	<section class="home--location">
 		<div class="small_wrapper relative">
			<img class="marker" src="<?php echo get_template_directory_uri(); ?>/assets/images/Home/marker.png" alt="Marker">
			<img class="mini-forward" src="<?php echo get_template_directory_uri(); ?>/assets/images/Home/mini-fast-forward.png" alt="Mini Fast Forward Symbol">
 		</div>
 		<div class="wrapper">
 			<div class="location--container flex relative">
        <a href="<?php echo get_home_url(); ?>/register">
 				     <div class="button--circle home--circle">
           			<h3>Register Today</h3>
       			</div>
        </a>
 				<div class="location--container--left">
 					<h2><?php the_field('location_name'); ?></h2>
 					<p><?php the_field('location_address'); ?></p>
 					<a class="link" href="<?php echo get_home_url(); ?>/venue">Directions & Hotel</a>
 				</div>
 				<div class="location--container--right">

 				</div>
 			</div>
 		</div>
 	</section>

 	<section class="home--entertainment">
 		<div class="entertainment-wrapper relative">
	 		<div class="entertainment--special--container">
	 			<div class="entertainment--container">
	 				<div class="venue-pointer-container">
	 					<div class="venue-pointer">
	 						<h1>Venue</h1>
	 					</div>
	 				</div>
	 				<div class="live-performance-container">
	 					<div class="live-performance">
	 						<h2>Live Performance By</h2>
	 					</div>
	 				</div>
	 				<div class="live-performance-name-container">
	 					<div class="live-performance-name">
	 						<p><?php the_field('teaser'); ?></p>
	 					</div>
	 				</div>
	 				<p class="one--night">One Night Only</p>
	 			</div>
	 		</div>
	 	</div>
 	</section>

 	<section class="home--faq-toy">
 		<div class="wrapper clearfix">
      <a href="<?php echo get_home_url(); ?>/faq">
  			<div class="faq-left">
  				<h1 class="uppercase">FAQ</h1>
  			</div>
      </a>
      <a href="<?php echo get_home_url(); ?>/toy-drive">
  			<div class="toy-right">
  				<h1 class="uppercase">TOY DRIVE</h1>
  			</div>
      </a>
			<div class="kpmg-disclaimer">
				<?php the_field('kpmg_disclaimer'); ?>
			</div>
 		</div>
 	</section>

<?php get_footer(); ?>
