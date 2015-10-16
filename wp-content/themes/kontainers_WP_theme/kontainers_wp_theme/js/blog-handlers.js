
$(document).ready(function(){
	var testimonialAddClass = function(classToAdd, timeout){
		if(typeof timeout === "undefined"){ timeout = 0;}
		setTimeout(function(){$('.quote-animator').addClass('show-quote ' + classToAdd)} , timeout);
	}

	var testimonialRemoveClass = function(classToRemove, timeout){
		if(typeof timeout === "undefined"){ timeout = 0;}

		setTimeout(function(){$('.quote-animator').removeClass('show-quote ' + classToRemove)}, timeout);
		// if it's last quote - quote-four
		if(classToRemove === 'show-quote-four'){
			$('.quote-animator').removeClass('noninteractive');
		}
	}


	window.onload = function() {
		<!--  preloader -->
		$('html').removeClass('bc_page_loading').addClass('bc_page_loaded');
		<!--  Testimonials - show in order -->
		testimonialAddClass('show-quote-one', 2500);
		testimonialRemoveClass('show-quote-one', 8500);
		testimonialAddClass('show-quote-two', 9500);
		testimonialRemoveClass('show-quote-two', 15500);
		testimonialAddClass('show-quote-three', 16500);
		testimonialRemoveClass('show-quote-three', 21500);
		testimonialAddClass('show-quote-four', 22500);
		testimonialRemoveClass('show-quote-four', 29500);
	}


	/*---------- Testimonials ---------*/
	$('.quote-one').hover(function(e){
		testimonialAddClass('show-quote-one');
	});
	$('.quote-one ').mouseleave(function(e){
		testimonialRemoveClass('show-quote-one');
	});

	$('.quote-two .quote-logo').hover(function(e){
		testimonialAddClass('show-quote-two');
	});
	$('.quote-two').mouseleave(function(e){
		testimonialRemoveClass('show-quote-two');
	});

	$('.quote-three .quote-logo').hover(function(e){
		testimonialAddClass('show-quote-three');
	});
	$('.quote-three').mouseleave(function(e){
		testimonialRemoveClass('show-quote-three');
	});

	$('.quote-four .quote-logo').hover(function(e){
		testimonialAddClass('show-quote-four');
	});
	$('.quote-four').mouseleave(function(e){
		testimonialRemoveClass('show-quote-four');
	});

	/*-------------------------
	 ---------- Modals ---------
	 ---------------------------*/
	// demo signed in/ signed up demo - close modal
	$('.action_login').click(function(e){
		$('.bclever-modal-bg,.bclever-modal').removeClass('bclever-modal-open');
		<!-- change the menu to logged in state	-->
		$('.btn_login').addClass('displayNone');
		$('.btn_logout,.btn_profile,.btn_messages,.btn_dash').removeClass('displayNone');
	});


	<!-- modals general - close 	-->
	$('.close-bclever-modal').click(function(e){
		$('.bclever-modal-bg').removeClass('bclever-modal-open');
		$('.bclever-modal').removeClass('bclever-modal-open');
	});

	<!-- demo - go to url after delay -->
	$('.action_goToUrl').click(function(e){

		$('html').removeClass('bc_page_loaded').addClass('bc_page_loading');

		var t = function () {
			window.location.href = 'map.html';
			//If you wanted to change the page without it reflecting in the browser back history
			//window.location.replace('...');
			e.preventDefault();
		}
		setTimeout(t, 2888);
	});

	<!-- demo - go to url after delay -->
	$('.action_goTo-how-it-works').click(function(e){

		$('html').removeClass('bc_page_loaded').addClass('bc_page_loading');

		var t = function (e) {
			window.location.href = 'https://kontainers.co.uk/howitworks';
			//If you wanted to change the page without it reflecting in the browser back history
			//window.location.replace('...');
			e.preventDefault();
		}
		setTimeout(t, 2888);
	});

	<!-- demo - go to url after delay -->
	$('.action_goToApp').click(function(e){
		$('html').removeClass('bc_page_loaded').addClass('bc_page_loading');

		var t = function () {
			window.location.href = 'https://kontainers.co.uk/?quotePanel=true';
		}
		setTimeout(t, 2888);
	});
	$('.k-menu-quotes a').click(function(e){
			e.preventDefault();
			// fake click to go to the quote page
			$('.action_goToApp').click();
		}
	);

	<!-- hamburger button animate to close-->
	$('#nav-toggle').click(function(e){
		$('#nav-toggle').toggleClass('close-icon');
		$('.bc_navbar').toggleClass('open-nav');
	});

	$( ".widget_recent_entries , .widget_categories" ).on({
		click: function() {
			<!-- blog - show recent posts list-->
			$( this ).toggleClass( "show-items" );
		},
		mouseleave: function() {
			<!-- blog - hide recent posts list-->
			$( this ).removeClass( "show-items" );
		}
	});

	<!-- intro video-->
	$('.intro-help').click(function(e){
		$('.video_modal').addClass('videoOpen');
		<!-- Inject the video  -->
		document.getElementById('video-holder').innerHTML = '<iframe src="http://player.vimeo.com/external/126965017.hd.mp4?s=242f22f10780158837339fed5c5a4b9a&profile_id=113" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
	});
	<!-- close Video -->
	$('.closeVideo').click(function(){
		$('.video_modal').removeClass('videoOpen');
		<!-- delay video being removed until modal off screen and inject with nothing-->
		t = function () {
			document.getElementById('video-holder').innerHTML = '';
		}, setTimeout(t, 888)
	});
});