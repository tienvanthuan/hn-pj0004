import $ from 'jquery';

const w = $(window);
const header = $('.js-header');
const iconMenu = $('.js-iconmenu');
const navMenu = $('.js-navmenu');
const headerHeight = $('.js-header').outerHeight();
const logoO = $('.is-logo-o');
const logoW = $('.is-logo-w');

w.on('scroll', function () {
	const wScrollTop = w.scrollTop();
	if (wScrollTop > headerHeight) {
		header.addClass('is-scrolling');
		logoO.removeClass('is-hide');
		logoW.addClass('is-hide');
	} else {
		header.removeClass('is-scrolling');
		logoO.addClass('is-hide');
		logoW.removeClass('is-hide');
	}
});

iconMenu.on('click', function () {
	$(this).toggleClass('is-active');
	navMenu.toggleClass('is-active');
});
