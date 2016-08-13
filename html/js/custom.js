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

    });

	
    jQuery(window).load(function(){

        
    });


}(jQuery));	