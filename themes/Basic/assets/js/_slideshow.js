const SlideShowContainer = document.querySelectorAll('.js-slideshow-container')

SlideShowContainer.forEach((elem) => {
  // Controller
  var slideIndex = 1;
  const buttonPrevNext = elem.querySelectorAll('.js-slideshow-button')

  // UI/Controls
  buttonPrevNext.forEach((elem) => {
    elem.onclick = () => {
      if (elem.classList.contains('prev')) {
        showSlide(-1)
      } else {
        showSlide(1)
      }

    }
  })

  // render
const showSlide = (n) => {
  console.log('showSlide');
  showSlideshow(slideIndex += n)

}

const showSlideshow = () => {
  console.log(slideIndex);
}





  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
      slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }

  showSlides(slideIndex);
})
