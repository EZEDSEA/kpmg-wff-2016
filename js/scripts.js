$(function(){

	// Pop up home navigation

	$('.hamburger--container').on('click', function() {
		$('.hidden-menu').removeClass('hidden');
	});

	$('.fa-close').on('click', function() {
		$('.hidden-menu').addClass('hidden');
	});

	// Pop up internal navigation

	$('.hamburger--container--two').on('click', function() {
		$('.hidden-menu').removeClass('hidden');
	})

	$('.fa-close').on('click', function() {
		$('.hidden-menu').addClass('hidden');
	});

	// Special hover to reveal band name

	$('.live-performance-container').on({
		mouseenter: function() {
			$('.live-performance-name p').fadeIn()
		},
		mouseleave: function() {
			$('.live-performance-name p').fadeOut()
		}
	});

	$('.live-performance-name').on({
		mouseenter: function() {
			$('.live-performance-name p').fadeIn()
		},
		mouseleave: function() {
			$('.live-performance-name p').fadeOut()
		}
	});

	if( $(window).width() > 992) {
		$('header .wrapper').removeClass('relative');
	} else {
	}

	// Change Log in Value

	$('[name=kpmg_login_submit]').attr('value', 'Sign In');

	// Change Placeholder

	$('[name=login_name').attr('placeholder', 'Enter your kpmg email address');


	// FAQ Slider

	$('.question').click(function() {
		var answer = $(this).find('p');
		var arrow = $(this).find('span.triangle');
		$(this).find('span.triangle').toggleClass('point-down');
		$('span.triangle').not(arrow).removeClass('point-down');
		$('.question p').not(answer).slideUp();
		answer.slideToggle();
	});



});
