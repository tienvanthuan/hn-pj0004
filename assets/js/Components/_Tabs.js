import $ from 'jquery';

$(document).ready(function () {
	$('.js-tab1').each(function () {
		$('.js-tab1-link', this).on('click', function (e) {
			e.preventDefault();
			let id = $(this).attr('href');

			$(this).closest('.js-tab1-menu').find('.js-tab1-item').removeClass('is-current');
			$(this).parent().addClass('is-current');
			if (
				$(this).closest('.js-tab1-menu').find('.js-tab1-item').hasClass('is-current')
			) {
				$(this).closest('.js-tab1').find('.js-tab1-content').hide();
				$(this).closest('.js-tab1').find('.js-tab1-content[data-id=' + id + ']').show();
			}
		});
	});
});
