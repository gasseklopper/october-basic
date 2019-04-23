const SlideShowContainer = document.querySelectorAll('.js-slideshow-container')

SlideShowContainer.forEach((elem) => {
// Controller
  var slideIndex = 1;
  const buttonPrevNext = elem.querySelectorAll('.js-slideshow-button')
  const buttonDots = elem.querySelectorAll('.js-slideshow-dot')
  const slides = elem.querySelectorAll(".mySlides");

// UI/Controls

  // next/pre Button
  buttonPrevNext.forEach((elem) => {
    elem.onclick = () => {
      if (elem.classList.contains('prev')) {
        showSlide(-1)
      } else {
        showSlide(1)
      }
    }
  })

  // Dots Button
  buttonDots.forEach((elem, i) => {
    elem.onclick = () => {
      showSlideshow(slideIndex = i + 1);
    }
  })

// render
  const showSlide = (n) => {
    showSlideshow(slideIndex += n)
  }

  const showSlideshow = (n) => {
    var i;

    // resets slideIndex to one if n is larger
    if (n > slides.length) {
      slideIndex = 1
    }
    // resets slideIndex to last slides item count
    if (n < 1) {
      slideIndex = slides.length
    }

    // sets every slide to display none
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    // remove active state on dots
    for (i = 0; i < buttonDots.length; i++) {
      buttonDots[i] = buttonDots[i].classList.remove('active');
    }

    // add display block for slide  on current slideIndex
    slides[slideIndex - 1].style.display = "block";

    // add active state on dots for current slide
    buttonDots[slideIndex - 1].classList.toggle('active');
  }

// intial load
  showSlideshow(slideIndex);
})
