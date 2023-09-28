import $ from 'jquery';

$(window).on("load", function () {
	setTimeout(() => {
		$('.js-loading').removeClass('is-loading');
	}, 1300);
});
