
$(document).ready(function(){
			
		
	    window.onload = function() {
			<!--  preloader --> 
			$('html').removeClass('bc_page_loading');
			$('html').addClass('bc_page_loaded');

			<!--  Testimonials - show first --> 
			t = function (e) {
			$('.quote-animator').addClass('show-quote show-quote-one');
			e.preventDefault(); 
			}, setTimeout(t, 2500)
			
			<!--  Testimonials - hide first -->
			t = function (e) {
			$('.quote-animator').removeClass('show-quote show-quote-one');
			e.preventDefault(); 
			}, setTimeout(t, 8500)

			
			<!--  Testimonials - show second --> 
			t = function (e) {
			$('.quote-animator').addClass('show-quote show-quote-two');
			e.preventDefault(); 
			}, setTimeout(t, 9500)
			
			<!--  Testimonials - hide second -->
			t = function (e) {
			$('.quote-animator').removeClass('show-quote show-quote-two');
			e.preventDefault(); 
			}, setTimeout(t, 15500)

			
			<!--  Testimonials - show third --> 
			t = function (e) {
			$('.quote-animator').addClass('show-quote show-quote-three');
			e.preventDefault(); 
			}, setTimeout(t, 16500)
			
			<!--  Testimonials - hide third -->
			t = function (e) {
			$('.quote-animator').removeClass('show-quote show-quote-three');
			e.preventDefault(); 
			}, setTimeout(t, 21500)
			
				<!--  Testimonials - show fourth --> 
			t = function (e) {
			$('.quote-animator').addClass('show-quote show-quote-four');
			e.preventDefault();
			}, setTimeout(t, 22500)
			
			<!--  Testimonials - hide fourth -->
			t = function (e) {
				$('.quote-animator').removeClass('show-quote show-quote-four');
				$('.quote-animator').removeClass('noninteractive');
				e.preventDefault();
			}, setTimeout(t, 29500)

	      }
		  
		  
	  <!------------------------------------------->	
	<!---------- Testominials --------->	
	 <!------------------------------------------->					
				
			
				$('.quote-one .quote-logo').hover(function(e){	
					$('.quote-animator').addClass('show-quote show-quote-one');
				});		
				$('.quote-one ').mouseleave(function(e){	
					$('.quote-animator').removeClass('show-quote show-quote-one');

				});		
				
				$('.quote-two .quote-logo').hover(function(e){	
					$('.quote-animator').addClass('show-quote show-quote-two');
				});		
				$('.quote-two').mouseleave(function(e){	
					$('.quote-animator').removeClass('show-quote show-quote-two');
				});	
				
				$('.quote-three .quote-logo').hover(function(e){	
					$('.quote-animator').addClass('show-quote show-quote-three');
				});		
				$('.quote-three').mouseleave(function(e){	
					$('.quote-animator').removeClass('show-quote show-quote-three');
				});	
				
				$('.quote-four .quote-logo').hover(function(e){	
					$('.quote-animator').addClass('show-quote show-quote-four');
				});		
				$('.quote-four').mouseleave(function(e){	
					$('.quote-animator').removeClass('show-quote show-quote-four');
				});	
	
	
 
		
				  <!--------------------------->	
				  <!---------- Modals --------->	
				  <!--------------------------->	
		  
				  
		<!-- demo signed in/ signed up demo - close modal	-->	
		$('.action_login').click(function(e){
			$('.bclever-modal-bg').removeClass('bclever-modal-open');
		    $('.bclever-modal').removeClass('bclever-modal-open');
			<!-- change the menu to logged in state	-->	
			$('.btn_login').addClass('displayNone');
			$('.btn_logout').removeClass('displayNone');
			$('.btn_profile').removeClass('displayNone');
			$('.btn_messages').removeClass('displayNone');
			$('.btn_dash').removeClass('displayNone');
			
			
			});	
			
			 
			<!-- modals general - close 	-->	
			  $('.close-bclever-modal').click(function(e){
			  $('.bclever-modal-bg').removeClass('bclever-modal-open');
		      $('.bclever-modal').removeClass('bclever-modal-open');
			});	
			
			
				
				
			
				
				<!-- demo - go to url after delay -->	
				$('.action_goToUrl').click(function(e){	
				
			        $('html').removeClass('bc_page_loaded');
			        $('html').addClass('bc_page_loading');
				
				    t = function (e) {
					window.location.href = 'map.html';
					//If you wanted to change the page without it reflecting in the browser back history
					//window.location.replace('...');
					e.preventDefault(); 
					}, setTimeout(t, 2888)	
				});	
				
				
			<!-- demo - go to url after delay -->	
			$('.action_goTo-how-it-works').click(function(e){	
				
			$('html').removeClass('bc_page_loaded');
			$('html').addClass('bc_page_loading');
				
				t = function (e) {
					window.location.href = 'how_it_works.html';
					//If you wanted to change the page without it reflecting in the browser back history
					//window.location.replace('...');
					e.preventDefault(); 
					}, setTimeout(t, 2888)	
				});	
				
				
				<!-- demo - go to url after delay -->	
			$('.action_goToApp').click(function(e){	
				
			$('html').removeClass('bc_page_loaded');
			$('html').addClass('bc_page_loading');
				
				t = function () {		
					window.location.href = 'home.html';
					//If you wanted to change the page without it reflecting in the browser back history
					//window.location.replace('...');
					e.preventDefault(); 
					}, setTimeout(t, 2888)	
				});	
				
				
				<!-- hamburger button animate to close-->	
				$('#nav-toggle').click(function(e){
				$('#nav-toggle').toggleClass('close-icon');
				$('.bc_navbar').toggleClass('open-nav');
  				});
					

});		

  




