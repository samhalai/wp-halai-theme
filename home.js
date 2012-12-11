$(document).ready(function(){
    $('header[data-type="background"]').each(function(){
        var $bgobj = $(this); // assigning the object
        $(window).scroll(function() {
            if($bgobj.data('direction')==0) {
            	var xPos = -($(window).scrollTop() / $bgobj.data('speed'));
            	// Put together our final background position
            	var coords = xPos + 'px ' + '50%';
            } else if($bgobj.data('direction')==1) {
            	var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
            	// Put together our final background position
            	var coords = '50% '+ yPos + 'px';
            } else if($bgobj.data('direction')==2) {
	            var xPos = -($(window).scrollTop() / $bgobj.data('speed'));
	            var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
            	// Put together our final background position
            	var coords = xPos + 'px ' + yPos + 'px';
            }
            // Move the background
            $bgobj.css({ backgroundPosition: coords });
        });
    });
});