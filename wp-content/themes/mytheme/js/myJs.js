jQuery(document).ready(function( $ ) {

});


(function( $ ){

  // Здесь код, который должен выполняться сразу, не дожидаясь document.ready 
  // (самым первым в цикле жизни страницы)

  $(window).load(function(){

		$('document').ready(function() {
			$('#header-widget-area').on('click', clickMobileMenu); 
			$('#mobile-menu-btn').on('click', clickMobilePhone);
			$('#contacts').length ? $('.textwidget iframe').css('height', '0px') : '';
			console.log($('#contacts').length);
		})

		function clickMobileMenu() {

			$view = $('header .chw-widget');
			$view1 = $('#site-navigation-mobile');
			
			//прячу открытую вкладку если есть
			parseInt($view1.css('height')) ? $view1.css({'height' : '0', 'overflow' : 'hidden'}) : "";

			parseInt($view.css('height')) ? $view.css('height', '0') : $view.css('height', 'auto');
		}

		function clickMobilePhone() {

			$view = $('#site-navigation-mobile');
			$view1 = $('header .chw-widget');

			parseInt($view1.css('height')) ? $view1.css('height', '0') : "";
			parseInt($view.css('height')) ? $view.css({'height' : '0', 'overflow' : 'hidden'}) : $view.css({'height' : 'auto', 'overflow' : 'visible'});
		}

	});

})(jQuery);

