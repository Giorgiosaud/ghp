jQuery(document).ready(function($){
	$.fn.extend({
		animateCss: function (animationName) {
			var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			$(this).addClass('animated ' + animationName).one(animationEnd, function() {
				$(this).removeClass('hidden');
				$(this).removeClass('animated ' + animationName);
			});
		}
	});
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
					'background' : 'rgba(0, 0, 0, 0.85)'
				}
			}
		}
	});
	$('input[name|="Producto"]').change(function() {
		var prod=$('input[name|="Producto"]:checked').val();
		if($('input[name|="TipoDeCliente"]').is(':checked')) { 
			var cli=$('input[name|="TipoDeCliente"]:checked').val();
			console.info("Mostrar Form "+cli+" del prod "+prod); 
		}
		$('.TipoCliente').animateCss('customFadeIn');
	});
	$('input[name|="TipoDeCliente"]').change(function() {
		var prod=$('input[name|="Producto"]:checked').val();
		var cli=$('input[name|="TipoDeCliente"]:checked').val();
		console.info("Mostrar Form "+cli+" del prod "+prod);
	});

});
