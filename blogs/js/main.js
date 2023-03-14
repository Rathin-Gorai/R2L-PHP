(function($) {
	"use strict"
	
	// Preloader
	$(window).on('load', function() {
		$("#preloader").delay(600).fadeOut();
	});

	// Mobile Toggle Btn
	$('.navbar-toggle').on('click',function(){
		$('#header').toggleClass('nav-collapse')
	});
	
})(jQuery);

function shareToFacebook() {
	// Get the URL of the current page
	var url = window.location.href;
  
	// Open the Facebook share dialog
	window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url), '_blank');
  }

  document.getElementById("submit").addEventListener("click", function() {
	// history.go(-1);
	location.reload();
  });