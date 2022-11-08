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
      console.log("announcement to be shown");
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

// define a function that sets min-height of my-element to window.innerHeight:

const setHeight = () => {
  document.getElementById("my-element").style.minHeight = window.innerHeight + "px"
};

// define mobile screen size:

let deviceWidth = window.matchMedia("(max-width: 1024px)");

if (deviceWidth.matches) {
// set an event listener that detects when innerHeight changes:

  window.addEventListener("resize", setHeight);

// call the function once to set initial height:

  setHeight();
}

}); //end DOM Load