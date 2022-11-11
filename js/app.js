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




}); //end DOM Load