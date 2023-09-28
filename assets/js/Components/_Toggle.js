import $ from 'jquery';

$(document).ready(function () {
	$('.c-faq__text1').hide();
	$('.js-toggle1').each(function () {
		$(this).on('click', function () {
			$(this).toggleClass('is-active');
			$(this).parent('.c-faq__item').find('.c-faq__text1').slideToggle(400);
		});
	});
});
