jQuery(document).ready(function($){
	$('[data-toggle="popover"]').popover({
	});
	var myPath=$('#my-path'),
	segment=new Segment(myPath);

	segment.draw("25%", "75% - 10", 1);

	function cubicIn(t) {
        	return t * t * t;
    	}
	function done() {
        	alert("Done!");
    	}
	segment.draw(0, "100%", 1, {delay: 1, easing: cubicIn, callback: done});


});

//# sourceMappingURL=main.js.map
