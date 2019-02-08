
(function() {

	doSlide = function(step) {
	return function() {
	  var current = getCurrent();
	  slides[current].checked = false;
	  current += step;
	  if (current == slides.length) {
		current = 0;
	  } else if (current == -1) {
		current = slides.length-1;
	  }
	  slides[current].checked = true;
	}
	}

  function getCurrent() {
	for (var i=0; i<slides.length; i++) {
	  if (slides[i].checked) return i;
	}
	return 0;
  }

  function onSlideClickLeft(event) {
	clearInterval(interval);
	doSlide(-1)();
	if (displayStatus != "none") {
	  interval = setInterval(doSlide(+1), TIMEOUT);
	}
  }

  function onSlideClickRight(event) {
	clearInterval(interval);
	doSlide(+1)();
	if (displayStatus != "none") {
	  interval = setInterval(doSlide(+1), TIMEOUT);
	}
  }

  function onResize() {

	displayStatus = (slideButtonsWrapper.currentStyle ? slideButtonsWrapper.currentStyle.display :
	  getComputedStyle(slideButtonsWrapper, null).display);

	if (displayStatus === "none") {
	  clearInterval(interval);
	} else {
		if (displayStatus != lastDisplayStatus) {
		  interval = setInterval(doSlide(1), TIMEOUT);
		}
	}
	lastDisplayStatus = displayStatus;
  }

// ##########################




  var TIMEOUT = 10000;
  var slides = document.querySelectorAll('#erla-fscreen-slider input[class*="slide-radio"]');
  var slideButtonLeft = document.querySelector("#erla-fscreen-slider .slider-navigation.arrow-left");
  var slideButtonRight = document.querySelector("#erla-fscreen-slider .slider-navigation.arrow-right");
  
  slideButtonLeft.addEventListener('click', onSlideClickLeft);
  slideButtonRight.addEventListener('click', onSlideClickRight);

  // time based automatic slideshow is disabled when slideButtons are display: none
  var interval, displayStatus, lastDisplayStatus;

  // reset timer when any of slideButtons is clicked
  var slideButtons = document.querySelector(".slider-pagination label");
  var slideButtonsWrapper = document.querySelector(".slider-pagination");

  

  // evt listener on resize
  window.addEventListener("resize", onResize);
  onResize();


  // preloader

  var preload = jQuery('#preloader');
  var preloadSpinner = jQuery('#preloader i');

  jQuery('body').imagesLoaded(
	  { background: true },
	  function() {
		
		  jQuery('body').removeClass('preload-active');
		  preloadSpinner.fadeOut(100, function () {
			  preload.fadeOut(1000, function() {
				// set interval for slider after all images are loaded
				  for (var i=0; i<slideButtons.length; i++) {
					slideButtons[i].addEventListener("click", function(event) {
					  clearInterval(interval);
					  interval = setInterval(doSlide(+1), TIMEOUT);
					})
				  }
			  });

		  })
		  
	  }
	);
}) ()
