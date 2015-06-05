// responsive navigation

window.onload = function() {
	
	var $ = jQuery;
		
	// toggle the main menu and current sub-menu
	$("#menu-main-title").click(function() { 
		$(".menu-main-menu-container").slideToggle();
		return false;
	});	
	//
	
	// toggle the search box
	$("#search-tablet-toggle").click(function() { 
		$("#search-tablet form.searchform").slideToggle();
		return false;
	});

};
