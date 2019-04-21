const container = document.querySelectorAll('.container_intro')

container.forEach((elem) => {
	const trigger = document.querySelector('.trigger')
	const headline = document.querySelector('.intro__title')

	const toggleContent = () => {

		if (elem.classList.contains('container--open')) {
				displayImg()
			window.addEventListener('scroll', noscroll);
		} else {

			document.body.scrollTop = document.documentElement.scrollTop = 0;
			window.removeEventListener('scroll', noscroll);
		}
							elem.classList.toggle('container--open');
							trigger.classList.toggle('trigger--active');
							headline.classList.toggle('intro__title--active');
	}

	const noscroll = () => {
		window.scrollTo(0, 0);
	}

	// reset scrolling position
	document.body.scrollTop = document.documentElement.scrollTop = 0;

	// disable scrolling
	window.addEventListener('scroll', noscroll);

	trigger.addEventListener('click', toggleContent);
	const imgArr = ["IMG_4409.jpg", "_MG_5727.jpg", "_MG_6001.jpg", "_MG_6167.jpg", "IMG_7153.jpg", "PICT6732-Edit.jpg"];

	function displayImg() {
		const num = Math.floor(Math.random() * (imgArr.length));
		document.canvas.src = "./themes/Basic/assets/images/" + imgArr[num];
	}
});
