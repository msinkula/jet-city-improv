/*  
Theme Name: Jet City Improv
Script Name: Toggle
Script Description: This script controls the main menu and search box toggle functionality.
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
*/

$(window).load(function() { // when the window loads...

	var $ = jQuery.noConflict(); // prevent jQuery conflicts
	
	$("#menu-main-title").click(function(e) { 
		$(".menu-main-menu-container").slideToggle(); // toggle the main menu container
		e.preventDefault(); // disable href
	});
	
	$("#search-tablet-toggle").click(function(e) { 
		$("#search-tablet form.searchform").slideToggle(); // toggle the search box
		e.preventDefault(); // disable href
	});
	
	var loadWidth = window.innerWidth; // save window load width as a variable
	
	$(window).resize(function() { // when the window is resized...
			
		if ( loadWidth !== window.innerWidth ) { // trigger for width only...
		
			if (window.innerWidth < 981) { // if width is less than 981px...
				
				$(".menu-main-menu-container").hide(); // hide the main menu continer
				
			} else  { // else ...
			
				$(".menu-main-menu-container").show(); // show the main menu continer
			
			}
		
		} // end trigger for width only
		
	}); // end window resize
			
}); // end window load
