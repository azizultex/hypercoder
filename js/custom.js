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

		/* Tooltip */
		$('[data-toggle="tooltip"]').tooltip()
		
		/* Scroll to top */
	    $(window).scroll(function() {
			if ($(this).scrollTop() >= 50) {
				$('.back-to-top').fadeIn(200);
			} else {
				$('.back-to-top').fadeOut(200);
			}
		});

		$('.back-to-top').click(function() {
			$('body,html').animate({
				scrollTop: 0
			}, 500);
		});

		/* smooth scroll */
		$(function() {
		  $('.smoothScroll, .smoothScroll>a').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});


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

	        /* Single Project */
	        var singleportfolio = $('.single-portfolio-slider');
		    if (singleportfolio.length > 0) {
		        singleportfolio.owlCarousel({
		            items: 1,
		            itemsDesktop: [1199, 1],
		            itemsDesktopSmall: [980, 1],
		            itemsTablet: [768, 1],
		            itemsMobile: [479, 1],
		            pagination: false
		        });
		        prev.click(function() {
		            singleportfolio.trigger('owl.prev');
		        });
		        next.click(function() {
		            singleportfolio.trigger('owl.next');
		        });
		    }

	    });

    });

	
    jQuery(window).load(function(){
    	 // Preloader
	    $('.preloader').fadeOut();
	    $('.load').delay(1000).fadeOut('slow');
	    $('body').delay(1000).css({
	        'overflow': 'visible'
	    });

	    /*Init Portfolio*/
	    var blog = $('#blog-grid');

	    if (blog.length > 0) {
	        blog.isotope({
	            layoutMode: 'masonry',
	            itemselector: '.blog'
	        });
	    };

	    /*Init Portfolio*/
	    var container = $("#work-grid");

	    if (container.length > 0) {
	        container.isotope({
	            layoutMode: 'masonry',
	            transitionDuration: '0.7s',
	            columnWidth: 60
	        });
	    }

        //  Load more Portfolio Masonry
        $('#load-more').click(function() {
            var self = $(this);
            $('.load-portfolio').css('display', 'block');
            self.hide();
            var url = 'ajax/masonryportfolio.html';
            var itemLoad = 4;
            $.ajax({
                url: url,
                data: {
                    itemCount: itemLoad
                }
            }).done(function(data) {
                container.isotope('insert', $(data));
                $('.load-portfolio').css('display', 'none');
                self.show();
            }).fail(function() {
                self.text('Error while loading!');
            });
        });

        //  Load more 3column Portfolio
        $('#load-more-3column').click(function() {
            var self = $(this);
            $('.load-portfolio').css('display', 'block');
            self.hide();
            var url = 'ajax/portfolio-3column.html';
            var itemLoad = 3;
            $.ajax({
                url: url,
                data: {
                    itemCount: itemLoad
                }
            }).done(function(data) {
                container.isotope('insert', $(data));
                $('.load-portfolio').css('display', 'none');
                self.show();
            }).fail(function() {
                self.text('Error while loading!');
            });
        });

        //   Load more 4 column Portfolio
        $('#load-more-4column').click(function() {
            var self = $(this);
            $('.load-portfolio').css('display', 'block');
            self.hide();
            var url = 'ajax/portfolio-4column.html';
            var itemLoad = 4;
            $.ajax({
                url: url,
                data: {
                    itemCount: itemLoad
                }
            }).done(function(data) {
                container.isotope('insert', $(data));
                $('.load-portfolio').css('display', 'none');
                self.show();
            }).fail(function() {
                self.text('Error while loading!');
            });
        });        

	    //Filter Portfolio
	    $('a.filter').click(function() {
	        var to_filter = $(this).attr('data-filter');
	        if (to_filter == 'all') {
	            container.isotope({
	                filter: '.mix'
	            });
	        } else {
	            container.isotope({
	                filter: '.' + to_filter
	            });
	        }
	    });

	    //Switch Classes portfolio
	    $('.filter').click(function() {
	        $('a.filter').removeClass('active');
	        $(this).addClass('active');
	    });
        
    });


}(jQuery));	
