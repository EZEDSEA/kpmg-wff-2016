<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php if ( is_front_page() ) { ?>

    <header class="header--home">
      <div class="wrapper relative">
        <div class="nav--container">
          <div class="logo--container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Home/KPMG-Logo.png" alt="KPMG Logo">
            <p>PRESENTS...</p>
          </div>

          <div class="nav--container--right">
            <div class="call-to-action vertically-center">
              <h3>Saturday, Dec 10, 2016 Toronto, ON</h3>
            </div>

            <div class="hamburger--container">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Home/Hamburger.png" alt="Hamburger Icon">
            </div>
          </div>
        </div>


        <div class="hidden-menu hidden">
          <div class="hidden-menu-container">

            <div class="hidden--top">
              <div class="fa fa-close fa-4x"></div>
              <h2>MENU</h2>
            </div>

            <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
           )); ?>
           <a href="<?php echo get_home_url(); ?>/register">
             <div class="button--circle">
                 <h3>Register Today</h3>
             </div>
           </a>
           <p><?php echo do_shortcode('[kpmgwinterfest_employee_cancel_registration]'); ?></p>
          </div>
        </div>
      </div>
    </header>

    <?php } else { ?>
    <div id=wrapper>
      <header>
        <div class="header--steps">
          <div class="wrapper">
            <img class="kpmg--logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/Home/KPMG-Logo.png" alt="KPMG Logo">
          </div>
          <div class="hamburger--container--two">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Home/Hamburger.png" alt="Hamburger Icon">
          </div>
        </div>
        <div class="internal-menu--container">
          <div class="wrapper">
            <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'internal'
              )); ?>
          </div>
        </div>

        <div class="hidden-menu hidden">
            <div class="hidden-menu-container">

              <div class="hidden--top">
                <div class="fa fa-close fa-4x"></div>
                <h2>MENU</h2>
              </div>

              <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'internal'
             )); ?>
             <a href="<?php echo get_home_url(); ?>/register">
               <div class="button--circle">
                   <h3>Register Today</h3>
               </div>
             </a>
             <p><?php echo do_shortcode('[kpmgwinterfest_employee_cancel_registration]'); ?></p>
            </div>
        </div>
      </header>
      <div class="content-wrapper">
    <?php } ?>
