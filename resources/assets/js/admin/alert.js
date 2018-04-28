(function($){
	$('.js-remove').on('click', function(){
		$(this).siblings('.alert-box').show();
	})
	$('.js-btn-no').on('click', function(){
		$('.alert-box').hide();
	})
})(jQuery);