(function ($) {
	"use strict";

    jQuery(document).ready(function($){
		
		$(window).scroll(function() {
			
			if ($(window).scrollTop() > 100) {
				$("body").addClass("sticky-menu");
			} 
			else {
				$("body").removeClass("sticky-menu");
			}
		}); 

		$('[data-toggle="tooltip"]').tooltip()
		
		$(function() {

	        var $document = $(document);
	        var selector = '[data-rangeslider]';
	        var $element = $(selector);

	        // For ie8 support
	        var textContent = ('textContent' in document) ? 'textContent' : 'innerText';

	        // Example functionality to demonstrate a value feedback
	        function valueOutput(element) {
	            var value = element.value;
	            var output = element.parentNode.getElementsByTagName('output')[0] || element.parentNode.parentNode.getElementsByTagName('output')[0];
	            output[textContent] = value;
	        }

	        $document.on('input', 'input[type="range"], ' + selector, function(e) {
	            valueOutput(e.target);
	        });


	        // Basic rangeslider initialization
	        $element.rangeslider({

	            polyfill: false,
	            onInit: function() {
	                valueOutput(this.$element[0]);
	            },
	            onSlide: function(position, value) {
	                console.log('onSlide');
	                console.log('position: ' + position, 'value: ' + value);
	            },
	            onSlideEnd: function(position, value) {
	                console.log('onSlideEnd');
	                console.log('position: ' + position, 'value: ' + value);
	            }
	        });

	    });

    });

	
    jQuery(window).load(function(){

        
    });


}(jQuery));	