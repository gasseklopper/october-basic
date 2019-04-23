const carouselSlide = document.querySelector('.carousel-slide')
const carouselImages = document.querySelectorAll('.carousel-slide img')


// button
const prevBtn = document.querySelector('#prevBtn')
const nextBtn = document.querySelector('#nextBtn')

//counter
let counter = 1;
window.onresize = function (event) {
const size = carouselSlide.clientWidth

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)'
};
window.onload = function (event) {
	const size = carouselSlide.clientWidth*2

	carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)'
};
