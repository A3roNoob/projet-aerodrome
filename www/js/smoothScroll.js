/*
  Bootstrap Smooth Scroll to Anchor
  Copyright griiettner @ Github
  https://gist.github.com/griiettner/6798961
*/

!function ($) {
	$(function(){
		$('#home, #me, #footer').carousel({});

		var $root = $('html, body');

		$('a').click(function() {
			var href = $.attr(this, 'href');
			$root.animate({
				scrollTop: $(href).offset().top
			}, 500, function () {
				window.location.hash = href;
			});
			return false;
		});
	})
}(window.jQuery)
