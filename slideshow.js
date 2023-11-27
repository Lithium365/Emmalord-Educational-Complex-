var slideIndex = 0;
var slideshowTimeout;

showSlides();

function plusSlides(n) {
  clearTimeout(slideshowTimeout);
  slideIndex += n;
  showSlides();
}

function currentSlide(n) {
  clearTimeout(slideshowTimeout);
  slideIndex = n;
  showSlides();
}

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
  
  if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }
  
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  
  slides[slideIndex].style.display = "block";
  dots[slideIndex].className += " active";
  
  slideshowTimeout = setTimeout(plusSlides, 5000, 1);
}

document.addEventListener("keydown", function (event) {
  if (event.keyCode === 37) {
    plusSlides(-1); // Left arrow key
  } else if (event.keyCode === 39) {
    plusSlides(1); // Right arrow key
  }
});
