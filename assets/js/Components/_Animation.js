import $ from 'jquery';

if ($('.js-animation').length) {
	scrollAnimation();
}
function scrollAnimation() {
	$(window).scroll(function () {
		$('.js-animation').each(function (i) {
			let scrollPosition = $(this).offset().top,
				scroll = $(window).scrollTop(),
				windowHeight = $(window).height();
			if (scroll > scrollPosition - windowHeight + 100) {
				if ($(this).data('anime-delay') !== 'undefined') {
					$(this)
						.delay($(this).data('anime-delay'))
						.queue(function () {
							$(this).addClass('is-show');
						});
				} else {
					$(this).addClass('is-show');
				}
			}
		});
	});
}
$(window).trigger('scroll');
