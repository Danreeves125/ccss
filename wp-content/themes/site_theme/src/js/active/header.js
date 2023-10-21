const header = document.querySelector('.header'),
	hamburger = document.querySelector('.header__hamburger'),
	mobileMenu = document.querySelector('.mobile');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('header__hamburger--active');
	mobileMenu.classList.toggle('mobile--open');

	let ariaText = hamburger.classList.contains('header__hamburger--active') ? 'Close Mobile Menu' : 'Open Mobile Menu';

	hamburger.setAttribute('aria-label', ariaText);

	document.querySelector('html').classList.toggle('mobile-menu-open');
});