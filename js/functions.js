
$(document).ready(function() {
	
	$.fn.shuffle = function() {

	    var allElems = this.get(),
	        getRandom = function(max) {
	            return Math.floor(Math.random() * max);
	        },
	        shuffled = $.map(allElems, function(){
	            var random = getRandom(allElems.length),
	                randEl = $(allElems[random]).clone(true)[0];
	            allElems.splice(random, 1);
	            return randEl;
	       });

	    this.each(function(i){
	        $(this).replaceWith($(shuffled[i]));
	    });

	    return $(shuffled);

	};

	$.fn.swap = function(b){ 
	    // method from: http://blog.pengoworks.com/index.cfm/2008/9/24/A-quick-and-dirty-swap-method-for-jQuery
	    b = jQuery(b)[0]; 
	    var a = this[0]; 
	    var t = a.parentNode.insertBefore(document.createTextNode(''), a); 
	    b.parentNode.insertBefore(a, b); 
	    t.parentNode.insertBefore(b, t); 
	    t.parentNode.removeChild(t); 
	    return this; 
	};

});
