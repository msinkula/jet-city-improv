<!-- Begin Sidebar -->
<div id="sidebar" class="page-<?php the_ID(); ?>">

	<!-- Begin Sub Pages -->
	<?php if ( !is_404() ) { if ( !is_search() ) { 
	
        if ($post->post_parent) { // if has post parent 
			
			$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0" ); 
			$parent_link = get_permalink($post->post_parent); 
			$parent_title = get_the_title($post->post_parent);
		
		} // end if has post parent 
		
        if ($children) { // if children ?>
        
        	<h2 class="sub-menu-title"><?php echo $parent_title; ?>:</h2>
        	<ul class="sub-menu">
        	<?php echo $children; ?>
        	</ul>
            
		<?php } // end if children ?>   
 
    <?php } } ?>	
    <!-- End Sub Pages -->
    
    <!-- Begin Blog Categories -->
    <?php 
	
	if (!('staff-member' == get_post_type())) { // if is not the staff memeber custom post type
		
		if ( is_home() || is_single() || is_archive() ) { ?> 
		<h2 class="sub-menu-title">Blog:</h2>
		<ul class="sub-menu">
		<?php wp_list_categories('exclude=&title_li='); ?>
		</ul>
    	<?php } 
	
	} ?>
    <!-- End Blog Categories -->
    
    <!-- Begin Dynamic Mobile Sidebar -->
    <?php wp_reset_query(); if (!(is_front_page())) : ?>    
	<?php dynamic_sidebar('mobile') ?> 
	<?php endif; ?>					
    <!-- End Dynamic Mobile Sidebar -->
    
    <!-- Begin Dynamic Sidebar -->
    <?php dynamic_sidebar('sidebar') ?>					
    <!-- End Dynamic Sidebar -->
    
</div>
<!-- End Sidebar -->