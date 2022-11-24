document.addEventListener("DOMContentLoaded", function(){
 
 /*Scroll to top button*/
 var scrollToTopBtn = document.getElementById("to-top-button");
  
 function scrollToTop() {
   document.body.scrollTop = 0; // For Safari
   document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
 }
 scrollToTopBtn.addEventListener("click", scrollToTop);
 

/* Announcement bar*/ 
const html = document.querySelector('html');
const announcement = document.querySelector('#announcement-bar');

if (html.classList.contains('announcement')) {
  if (typeof(Storage) !== "undefined") {
    if(!sessionStorage.hideAnnouncement) {
      announcement.classList.toggle('hidden');
      closeAnnouncement = document.querySelector('#close-announcement');
      closeAnnouncement.addEventListener('click', hideAnnouncement);
    } else {
      html.classList.toggle('announcement');
    }
  }
}

function hideAnnouncement() {
  announcement.classList.toggle('hidden');
  html.classList.toggle('announcement');
  if (typeof(Storage) !== "undefined") {
    sessionStorage.hideAnnouncement = "true";
  } 
}

// animations

const scrollElements = document.querySelectorAll(".js-scroll");

const elementInView = (el, dividend = 1) => { 
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop <=
    (window.innerHeight || document.documentElement.clientHeight) / dividend
  );
};

const elementOutofView = (el) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop > (window.innerHeight || document.documentElement.clientHeight)
  );
};

const displayScrollElement = (element) => {
  element.classList.add("scrolled");
};

const hideScrollElement = (element) => {
  element.classList.remove("scrolled");
};

const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 1.25)) {
      displayScrollElement(el);
    } else if (elementOutofView(el)) {
      hideScrollElement(el)
    }
  })
}

window.addEventListener("scroll", () => { 
  handleScrollAnimation();
});


   (function($) {
	var $window = $(window);
	var $videoWrap = $('#featured-media');
	var $video = $('#featured-video');
	var videoHeight = $video.outerHeight();
  if ($videoWrap.length) {
	$window.on('scroll',  function() {
		var windowScrollTop = $window.scrollTop();
		var videoBottom = videoHeight + $videoWrap.offset().top;
		
		if (windowScrollTop > videoBottom) {
			$video.addClass('is-sticky');
		} else {
			$video.removeClass('is-sticky');
		}
	});
}
}(jQuery));


}); //end DOM Load