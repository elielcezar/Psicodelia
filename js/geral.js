
(function($) {
   $().ready(function() {

      	$('#nav-icon').click(function(){
      		$('#nav-icon, .menu.nav').toggleClass('open');
      	});

				$('form input[type="submit"]').addClass('btn btn-primary btn-raised');

    });
})(jQuery);
