
$(document).ready(function() {

	var jig = jig || {};

	jig.game = (function() {
	
		function init() {
		
			for (var i=1; i <= 16; i++) {
				var piece = $('<div class="piece p'+i+'"></div>');
				$('#board').append(piece);
			}
		
			$('.piece').shuffle();		
		}
	
		return {
			init: init
		};
	
	})();

	jig.game.init();
	
	$( ".piece" ).draggable({
		revert: false, 
		helper: "clone"
	});

	$( ".piece" ).droppable({
	    accept: ".piece",
	    activeClass: "active",
	    hoverClass: "hover",
	    drop: function( event, ui ) {

	        var draggable = ui.draggable, droppable = $(this),
	            dragPos = draggable.position(), dropPos = droppable.position();

	        draggable.css({
	            left: dropPos.left+'px',
	            top: dropPos.top+'px'
	        });
	        
	        droppable.css({
	            left: dragPos.left+'px',
	            top: dragPos.top+'px'
	        });
	        draggable.swap(droppable);
	    }
	});

});
