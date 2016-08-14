jQuery(document).ready(function($){
	$( '#dl-menu' ).dlmenu({
		animationClasses : { classin : 'dl-animate-in-4', classout : 'dl-animate-out-4' },
		backLabel:'Atras'
	});
	/* change revapi1 to whatever API name is being used for your slider */
	var api = revapi6;
	/* no need to edit below unless you want to change the default FancyBox settings */
	api.on('revolution.slide.onloaded', function() {
		jQuery(this).find('.fancybox').each(function() {
			var $this = jQuery(this);
			if(!$this.is('a')) $this = $this.removeClass('fancybox').find('a');
			$this.addClass('fancybox').attr('rel', 'gallery').fancybox({
				/* begin FancyBox options */
				width: 'auto',
				height: 'auto',
				autoSize: true,
				aspectRatio: true,
				fitToView: true,
				autoCenter: true,
				scrolling: 'no',
				onClosed: function() {
					api.revresume();
				}
			}).on('click', function() {
				api.revpause();
			});

		});

	});
});
