(function () {
	
	// upadate navbar state on scroll

	var win = jQuery(window);
	var nav = jQuery(".navigation");
	var navDropdown = jQuery("ul.dropdown-menu");
	var imgLogo = jQuery("img#upper-logo");
	var logoLight = imgLogo.data("light");
	var logoDark = imgLogo.data("dark");

	jQuery(win).scroll(function () {
		if(win.scrollTop()) {
			nav.addClass("solid");
			navDropdown.addClass("solid");
			imgLogo.attr("src", logoDark);
		} else {
			nav.removeClass("solid");
			navDropdown.removeClass("solid");
			imgLogo.attr("src", logoLight);
		}
	})


	// initialise carousels

	function titleCarousel(carousel_arg, titles_arg) {
		this.titles = titles_arg;
		this.carousel = carousel_arg; 

		var car = jQuery(this.carousel);
		var tit = jQuery(this.titles);

		car.owlCarousel({
				loop:false,
				margin:10,
				nav:false,
				items:1,
				dots: false
		});

		// click events for page links
		var navigation = jQuery(this.titles);
		for (var i=0; i<navigation.length; i++ ) {

				(function(i) {
						jQuery(navigation[i]).click(function() {
						car.trigger('to.owl.carousel', i);
				 });
				})(i)
		}

		// upadate 'active' on page links
		car.on('changed.owl.carousel', function(event) {
				var currentItem = event.item.index;

				for (var i=0; i<tit.length; i++ ) {
						jQuery(tit[i]).removeClass('active');
						if (i==currentItem) {
								jQuery(tit[i]).addClass('active');
						}
				}
		})
	}

	karuzela1 = new titleCarousel("#carousel-spots", "#links-spots ul li");
	karuzela2 = new titleCarousel("#carousel-gallery", "#links-gallery ul li");

	var mobileGallery = jQuery('#carousel-gallery-mobile');

	mobileGallery.owlCarousel({
		center: false,
		loop:false,
		margin:5,
		items:2,
		dots: true,
	});


	// initialize lightbox galleries

	var galleries = jQuery(".aqua-lightbox-gallery");
	for (var i=0; i<galleries.length; i++) {
		jQuery(galleries[i]).find('a').simpleLightbox({loop: false});
	}
	var galleryMobile = jQuery('#carousel-gallery-mobile a').simpleLightbox({loop: false});


	// initialize animation if not on mobile


	if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

		jQuery('.animate').css('opacity', 0);

		jQuery('.animate').bind('inview', function(event, visible) {
	      if (visible) {
	        var that = this;
	        setTimeout(function() {
	          jQuery(that).stop().animate({ opacity: 1 }, 500);
	         }, 20);
	      } else { }
	    });

	}



})()

// global scope

// enable smooth scroll plugin

smoothScroll.init({
	easing: 'easeIn',
	speed: 1000
});

// google maps

function myMap() {

		var backendOpts = document.getElementById("aqua_map_options").value;
		backendOpts = JSON.parse(backendOpts);

		var mapCanvas = document.getElementById("map");
		var mapOptions = {
				center: new google.maps.LatLng(backendOpts["longitude"], backendOpts["latitude"]),
				zoom: parseInt(backendOpts["zoom"]),
				scrollwheel: false,
		};

		var map = new google.maps.Map(mapCanvas, mapOptions);

		var marker = new google.maps.Marker({
			position: {lat: parseFloat(backendOpts["longitude"]), lng: parseFloat(backendOpts["latitude"])},
			map: map
		});
}

 jQuery(function(){ 
     var navMain = jQuery("#navbar-primary");
     navMain.on("click", "a", null, function () {
         navMain.collapse('hide');
     });
 });


// smoothScroll.init({
//   selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
//   selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
//   speed: 500, // Integer. How fast to complete the scroll in milliseconds
//   easing: 'easeInOutCubic', // Easing pattern to use
//   offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
//   callback: function ( anchor, toggle ) {} // Function to run after scrolling
// });