const carouselSlide = document.querySelector('.carousel-slide')
const carouselImages = document.querySelectorAll('.carousel-slide img')
const clone = document.querySelectorAll('.carousel-slide img')

if (carouselSlide){
// button
const prevBtn = document.querySelector('#prevBtn')
const nextBtn = document.querySelector('#nextBtn')

// variables for use
let counter = 1
let size = 1


// functions

// first image is the second in the flow.
// we need at the start and the end of the carousell clones.
//  to make the illussion of an endless slider without jumping to first or last image
const jumpToImage = () => {
	size = carouselSlide.clientWidth
	carouselSlide.style.transition = "none"
	carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)'
}


// button listener
nextBtn.addEventListener('click', () => {
	if (counter >= carouselImages.length - 1) return
	carouselSlide.style.transition = "transform 0.4s ease-in-out"
	counter++
	carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)'
})

prevBtn.addEventListener('click', () => {
	if(counter <= 0) return
	carouselSlide.style.transition = "transform 0.4s ease-in-out"
	counter--
	carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)'
})

carouselSlide.addEventListener('transitionend', () => {
	if (carouselImages[counter].id === 'lastClone') {
		carouselSlide.style.transition = "none"
		counter = carouselImages.length - 2
		carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)'
	}
	if (carouselImages[counter].id === 'firstClone') {
		carouselSlide.style.transition = "none"
		counter = carouselImages.length - counter
		carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)'
	}
})

// init
jumpToImage();
window.addEventListener('resize', jumpToImage)
}
