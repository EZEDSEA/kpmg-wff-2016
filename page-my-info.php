<!-- Template Name: My Info
 -->



<?php get_header(); ?>
<div class="content__direction">
		<div class="step-title">
		  <h2 class="uppercase">Winterfest 2016</h2>
		  <h1><?php the_title(); ?></h2>
		</div>
		<div class="line--B"></div>
		<div class="container my-info">
		  <div class="row info-box">
				<div class='topleftconcave'></div>
		    <div class='botleftconcave'></div>
				<div class='toprightconcave'></div>
		    <div class='botrightconcave'></div>
		    <div class="col-sm-4 calendar">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar_date.jpg" />
		    </div>
		    <div class="col-sm-5 col-sm-offset-1">
		      <div class="mapInfo">
		        <h4 class="purple">METRO TORONTO CONVENTION CENTRE</h4>
		        <div class="address">
		          <h5>
		          North Building, Halls A, B & C<br />
		          255 Front Street West<br />
		          Toronto, ON  M5V 2W6<br />
		        </h5>
		        </div>
		        <div class="schedule">
		          <h5><span class="purple"><strong>6PM</strong></span>&nbsp;&nbsp;Registration & Cocktail Reception</h5>
		          <h5><span class="purple"><strong>7PM</strong></span>&nbsp;&nbsp;Dinner</h5>
		          <h5><span class="purple"><strong>8PM</strong></span>&nbsp;&nbsp;Entertainment</h5>
		        </div>
						<h5><a href="https://www.google.com/maps/place/255+Front+St+W,+Toronto,+ON+M5V+2W6,+Canada/@43.6430829,-79.3886452,15z/data=!4m5!3m4!1s0x882b34d6bbf1de83:0x701072de173883cf!8m2!3d43.6438286!4d-79.3867892?hl=en-US">view map</a> | <a href="<?php echo get_home_url(); ?>/venue">directions & hotel</a></h5>
		      </div>
		    </div>
		  </div>
			<div class="row disclaimer">
				<div class="col-sm-12">
					PLEASE NOTE THAT PHOTO ID WILL BE REQUIRED TO ENTER THE EVENT AND ALL ATTENDEES
					<br />MUST BE 19 YEARS OR OLDER.  THE NAME ON THE PRINTED TICKET WILL HAVE TO MATCH THE PHOTO ID.
				</div>
			</div>
			<?php get_template_part( 'loop', 'index' );	?>
		</div>
  </div>

<?php get_footer(); ?>
