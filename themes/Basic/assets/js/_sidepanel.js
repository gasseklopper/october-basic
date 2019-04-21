

const menuPanelButton = document.querySelector('.js-menu-panel')

if (menuPanelButton) {
	console.log(menuPanelButton)
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
