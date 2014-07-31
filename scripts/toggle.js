// responsive navigation

window.onload = function() {
		
	// toggle the main menu and current sub-menu
	jQuery("#menu-main-title").click(function() { 
		jQuery(".menu-main-menu-container").slideToggle();
		return false;
	});
	
	
	jQuery(window).resize(function(){
		
		if (jQuery(window).width() > 980) {
			jQuery(".menu-main-menu-container").css('display', 'block');
		} 
		
		if (jQuery(window).width() < 980) {
			jQuery(".menu-main-menu-container").css('display', 'none');
		}
	});	
	
	// toggle the search box
	jQuery("#search-tablet-toggle").click(function() { 
		jQuery("#search-tablet form.searchform").slideToggle();
		return false;
	});

};
