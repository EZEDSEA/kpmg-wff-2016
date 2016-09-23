<!-- Template Name: Admin
 -->


<?php get_header(); ?>
<div class="content__direction">
		<div class="step-title">
		  <h2 class="uppercase">Winterfest 2016</h2>
		  <h1><?php the_title(); ?></h2>
		</div>
		<div class="line--B"></div>
		<div class="container admin">
			<ul class="nav-tabs">
    <li><a  class="inactive" href="?admin_reports=1" data-target="reports">Reports</a></li>
    <li><a class="inactive" href="?admin_registration=1" data-target="registration">Register Someone</a></li>
    <li><a class="inactive" href="?admin_updateregistration=1" data-target="updateregistration">Update Someone</a></li>
    <li><a class="inactive" href="?admin_group=1" data-target="group">Create Group</a></li>
    <li><a class="inactive" href="?admin_updategroup=1" data-target="updategroup">Update Group</a></li>
</ul>
<div id="reports" class="target hide">
    <div class="boxes">
		<div class="box">
			<div class="title">Registered tables</div>
			<div class="remaining"><?php echo do_shortcode('[kpmgwinterfest_unregistered_tables_count]'); ?></div>
		</div>
		<div class="box">
			<div class="title">Total</div>
			<div class="total"><?php echo do_shortcode('[kpmgwinterfest_registered_tables_count]'); ?></div>
		</div>
		<div class="box">
			<div class="title">upload employees</div>
			<div class="search"><?php echo do_shortcode('[kpmgwinterfest_admin_upload_employees]'); ?></div>
		</div>
		<div class="box">
			<div class="title">register cut-off</div>
			<div class="search"><?php echo do_shortcode('[kpmgwinterfest_admin_register_cutoff]'); ?></div>
		</div>
		<div class="box sendReports">
                  <div class="title">Reports</div>
		  <label>Table reservations</label>
		  <div class="csv"><?php echo do_shortcode('[kpmgwinterfest_admin_report_reservations]'); ?></div>

		  <label>Group reservations</label>
		  <div class="csv"><?php echo do_shortcode('[kpmgwinterfest_admin_report_groups]'); ?></div>

		  <label>Dietary requirements</label>
		  <div class="csv"><?php echo do_shortcode('[kpmgwinterfest_admin_report_dietary]'); ?></div>

		  <label>Master report</label>
		  <div class="csv"><?php echo do_shortcode('[kpmgwinterfest_admin_report_master]'); ?></div>
		</div>
	</div>
</div>

<div id="registration" class="target hide">
    <div class="boxes">
        <div class="box">
            <div class="title">Register an Employee</div>
            <div class="search"><?php echo do_shortcode('[kpmgwinterfest_admin_register]'); ?></div>
        </div>
    </div>
</div>

<div id="updateregistration" class="target hide">
    <div class="boxes">
        <div class="box">
            <div class="title">Update Someone</div>
            <div class="search"><?php echo do_shortcode('[kpmgwinterfest_admin_registerup]'); ?></div>
        </div>
    </div>
</div>

<div id="group" class="target hide">
    <div class="boxes">
        <div class="box">
            <div class="title">Create Group</div>
            <div class="search"><?php echo do_shortcode('[kpmgwinterfest_admin_group]'); ?></div>
        </div>
    </div>
</div>

<div id="updategroup" class="target hide">
    <div class="boxes">
        <div class="box">
            <div class="title">Update Group</div>
            <div class="search"><?php echo do_shortcode('[kpmgwinterfest_admin_groupup]'); ?></div>
        </div>
    </div>
</div>
			<?php get_template_part( 'loop', 'index' );	?>
		</div>
  </div>

<?php get_footer(); ?>
