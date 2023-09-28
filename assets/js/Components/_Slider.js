import $ from 'jquery';
import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';

const w = $(window);


const slider1 = new Swiper('.js-slide1', {
	slidesPerView: 2,
	loop: true,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	breakpoints: {
		768: {
			slidesPerView: 4,
			centeredSlides: true,
			autoplay: {
				delay: 2500,
				disableOnInteraction: false,
			},
		},
	},
});

const slider2 = new Swiper('.js-slide2', {
	slidesPerView: 1,
	centeredSlides: true,
	loop: true,
	spaceBetween: 30,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	breakpoints: {
		768: {
			slidesPerView: 2,
			autoplay: {
				delay: 2500,
				disableOnInteraction: false,
			},
		},
	},
});

const slider3 = new Swiper('.js-slide3', {
	slidesPerView: 3,
	centeredSlides: true,
	loop: true,
	spaceBetween: 15,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	breakpoints: {
		768: {
			slidesPerView: 7,
			spaceBetween: 30,
			autoplay: {
				delay: 2500,
				disableOnInteraction: false,
			},
		},
	},
});

const slider4Nav = new Swiper('.js-slide4-nav', {
	loop: true,
	spaceBetween: 26,
	slidesPerView: 3,
	freeMode: true,
	watchSlidesProgress: true,
});

const slider4Main = new Swiper('.js-slide4-main', {
	loop: true,
	spaceBetween: 10,
	thumbs: {
		swiper: slider4Nav,
	},
});

if (w.outerWidth() >= 768) {
	$('.js-slide-top').addClass('swiper');
	$('.js-slide-top').find('.p-top__wrapper').addClass('swiper-wrapper');
	$('.js-slide-top').find('.p-top__item').addClass('swiper-slide');

	$('.js-slide-top').addClass('.swiper');
	const slideTop = new Swiper('.js-slide-top', {
		direction: 'vertical',
		slidesPerView: 1,
		speed: 800,
		loop: false,
		mousewheelControl: true,
		mousewheel: {
			releaseOnEdges: true,
		},
		pagination: {
			el: '.swiper-pagination',
		},
	});
} else {
	$('.js-slide-top').removeClass('swiper');
	$('.js-slide-top').find('.p-top__wrapper').removeClass('swiper-wrapper');
	$('.js-slide-top').find('.p-top__item').removeClass('swiper-slide');
}
