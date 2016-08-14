jQuery(document).ready(function($){
	$( '#dl-menu' ).dlmenu({
		animationClasses : { classin : 'dl-animate-in-4', classout : 'dl-animate-out-4' },
		backLabel:'Atras'
	});
	$('.fancybox').fancybox({
		helpers:  {
			title : {
				type : 'inside'
			},
			overlay : {
				css : {
					'background' : 'rgba(255,255,255,0.5)'
				}
			}
		}
	});
	
});
