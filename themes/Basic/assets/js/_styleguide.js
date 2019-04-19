const es= document.querySelectorAll('.styleguide_colors')

let rgbToHex = (col) => {
	if(col.charAt(0)=='r')
	{
		col=col.replace('rgb(','').replace(')','').split(',');
		var r=parseInt(col[0], 10).toString(16);
		var g=parseInt(col[1], 10).toString(16);
		var b=parseInt(col[2], 10).toString(16);
		r=r.length==1?'0'+r:r; g=g.length==1?'0'+g:g; b=b.length==1?'0'+b:b;
		var colHex='#'+r+g+b;
		return colHex;
	}
}

es.forEach((elem) => {
	const style = getComputedStyle(elem)
	const backgroundColor = style.backgroundColor
	console.log(backgroundColor) // rgb(0, 0, 0)
	const outputColorRGB = elem.querySelector('.styleguide_colors__rgbtitle')
	outputColorRGB.innerHTML = outputColorRGB.innerHTML + backgroundColor
	var col=backgroundColor;
	const outputColorHEX = elem.querySelector('.styleguide_colors__hextitle')
	outputColorHEX.innerHTML = outputColorHEX.innerHTML + rgbToHex(col)
});
const menuPanelButton = document.querySelector('.js-menu-panel')
console.log(menuPanelButton)
if (menuPanelButton) {
	menuPanelButton.addEventListener('click', () => {
		const element = document.getElementById('menu');
		element.classList.toggle('visible');
		console.log(element);
		console.log('pressed');
	});

	const menuPanelButtonClose = document.querySelector('.js-menu-panel-close')
	console.log(menuPanelButtonClose)

	menuPanelButtonClose.addEventListener('click', () => {
		const element = document.getElementById('menu');
		element.classList.toggle('visible');
		console.log(element);
		console.log('pressed');
	});

	const searchButtonClose = document.querySelector('.js-search-button')
	console.log(searchButtonClose)

	searchButtonClose.addEventListener('click', () => {
		const element = document.querySelector('.search__form');

		console.log(element);
		console.log('pressed');
	});
}




		var container = document.querySelector('.container'),
			trigger = document.querySelector('.trigger');

		function toggleContent() {
			console.log(container);
			if (container.classList.contains('.container--open')) {
				container.classList.toggle('container--open');

				window.addEventListener('scroll', noscroll);
			} else {
				container.classList.toggle('container--open');

				window.removeEventListener('scroll', noscroll);
			}
		}

		function noscroll() {
			window.scrollTo(0, 0);
		}

		// reset scrolling position
		document.body.scrollTop = document.documentElement.scrollTop = 0;

		// disable scrolling
		window.addEventListener('scroll', noscroll);

		trigger.addEventListener('click', toggleContent);
