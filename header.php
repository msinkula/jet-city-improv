<!doctype html>

<html>

<head>

<meta charset="UTF-8">

<title><?php if ( is_home() || is_archive() || is_page('Home')) { ?><?php bloginfo('description'); echo ' | '; bloginfo('name'); echo ' | '; echo 'Seattle, WA.'; ?><?php } else { ?><?php if ( is_single() || is_page()) { ?><?php the_title(); ?> | <?php if ( is_page() && $post->post_parent ) { ?><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; print ' | ' ?><?php } ?><?php bloginfo('name'); echo ' | '; echo 'Seattle, WA.'; ?><?php } } ?></title>



<!-- Begin Meta -->

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

<meta name="description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />

<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />

<meta name="google-site-verification" content="eOWAhGj7pBv5abIGRZ0vumnOgT-tdlhO-lRW8zA_Wbg" />

<meta name="google-site-verification" content="eOWAhGj7pBv5abIGRZ0vumnOgT-tdlhO-lRW8zA_Wbg" />

<!-- End Meta -->



<!-- Begin Meta for Facebook -->

<meta property="og:title" content="<?php the_title(); ?>"/>

<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />

<meta property="og:url" content="<?php the_permalink(); ?>"/>

<?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'thumbnail'); ?>

<?php if ($fb_image) : ?>

<meta property="og:image" content="<?php echo $fb_image[0]; ?>" />

<?php endif; ?>

<meta property="og:type" content="<?php if (is_single() || is_page()) { echo "article"; } else { echo "website";} ?>"

/>

<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>

<!-- End Meta for Facebook -->



<!-- Begin Links -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/ico-billy.png" />

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="all" />

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/staff-members.css" type="text/css" media="all" />

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/calendar.css" type="text/css" media="all" />

<!-- End Links -->



<!-- Begin Scripts -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/toggle.js"></script>

<!-- End Scripts -->



<!-- Begin Flex Slider -->

<script type="text/javascript">

    

    $(window).load(function(){

      $('.flexslider').flexslider({

        animation: "fade",

		slideshow: true,

      });

    });

	

</script>

<!-- End Flex Slider -->



<!-- Begin WP Head Function -->

<?php wp_head(); ?>

<!-- End WP Head Function -->



</head>



<body class="<?php if (is_page('Home')) { echo ' home'; } if (is_page()) { echo ' pages'; } if ( is_home() || is_single() || is_archive()) { echo ' postings';} if (is_singular('staff-member')) { echo ' staff';} /*if (is_search()); { echo ' search';}*/ ?>">



<!-- Begin Utility Menu -->

<div id="utilities">



		<!-- Begin Social Icons -->

        <div id="social-icons-tablet">

        <a href="https://twitter.com/JetCityImprov" target="_blank" title="Jet City Improv's Twitter Feed"><img src="<?php bloginfo('template_directory'); ?>/images/img-twitter-mobile.png" alt="Jet City Improv's Twitter Feed"></a>
<!--Mark edit: added Instagram link-->
        <a href="https://www.instagram.com/jetcityimprov" target="_blank" title="Jet City Improv's Instagram Page"><img src="<?php bloginfo('template_directory'); ?>/images/img-instagram-mobile.png" alt="Jet City Improv's Instagram Page"></a>

        <a href="https://www.facebook.com/jetcityimprov" target="_blank" title="Jet City Improv's FaceBook Page"><img src="<?php bloginfo('template_directory'); ?>/images/img-facebook-mobile.png" alt="Jet City Improv's FaceBook Page"></a>

        <a href="http://www.youtube.com/user/JetCityImprov" target="_blank" title="Jet City Improv's YouTube Page"><img src="<?php bloginfo('template_directory'); ?>/images/img-youtube-mobile.png" alt="Jet City Improv's YouTube Page"></a>

        </div>

        <!-- End Social Icons -->

        

        <!-- Begin Search Form -->

        <div id="search-tablet">

        <img id="search-tablet-toggle" src="<?php bloginfo('template_directory'); ?>/images/bg-search.png" width="24" height="24">

		<form method="get" class="searchform" action="<?php bloginfo('home'); ?>/">

      	<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" class="textfield" />

        <input type="submit" name="submit" class="submit" value="Search" />

        </form>

  </div>

        <!-- End Search Form -->

        

</div>

<!-- End Utility Menu -->



<!-- Begin Header -->

<div id="header">



	<!-- Begin Logo -->

    <div id="logo">

    <a href="<?php echo get_settings('home'); ?>" title="Link to Jet City Improv Home Page">

    <img class="desktop" src="<?php bloginfo('template_directory'); ?>/images/logo-1024.png" alt="Jet City Improv" />

    <img class="tablet" src="<?php bloginfo('template_directory'); ?>/images/logo-800.png" alt="Jet City Improv" />

    </a>

  </div>

	<!-- End Logo -->

    

    <!-- Begin Tchotchkes -->

    <div id="tchotchkes">

    

        <!-- Begin Social Icons -->

        <div id="social-icons">

        <a href="https://twitter.com/JetCityImprov" target="_blank" title="Jet City Improv's Twitter Feed"><img src="<?php bloginfo('template_directory'); ?>/images/img-twitter.png" alt="Jet City Improv's Twitter Feed"></a>
	<!--Mark edit: added Instagram link-->
        <a href="https://www.instagram.com/jetcityimprov" target="_blank" title="Jet City Improv's Instagram Page"><img src="<?php bloginfo('template_directory'); ?>/images/img-instagram.png" alt="Jet City Improv's Instagram Page"></a>

        <a href="https://www.facebook.com/jetcityimprov" target="_blank" title="Jet City Improv's FaceBook Page"><img src="<?php bloginfo('template_directory'); ?>/images/img-facebook.png" alt="Jet City Improv's FaceBook Page"></a>

        <a href="http://www.youtube.com/user/JetCityImprov" target="_blank" title="Jet City Improv's YouTube Page"><img src="<?php bloginfo('template_directory'); ?>/images/img-youtube.png" alt="Jet City Improv's YouTube Page"></a>

        </div>

        <!-- End Social Icons -->

        

        <!-- Begin Search Form -->

        <div id="search">

        <form method="get" class="searchform" action="<?php bloginfo('home'); ?>/">

        <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" class="textfield" />

        <input type="submit" name="submit" class="submit" />

        </form>

        </div>

        <!-- End Search Form -->

        

        <!-- Begin Tickets Link -->

        <div id="tickets">

        <a href="http://www.jetcityimprov.org/buy-tickets/">Buy<br>Tickets</a>

        </div>

        <!-- End Tickets Link -->

    

    </div>

    <!-- End Tchotchkes -->

    

</div>

<!-- End Header -->



<!-- Begin Main Menu -->

<div id="menu-main">

    <h4 id="menu-main-title"><a href="#">Menu<span class="icon"><img src="<?php bloginfo('template_directory'); ?>/images/img-mobile.png" /></span></a></h4>

    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

</div>

<!-- End Main Menu --> 



<!-- Begin Middle -->

<div id="middle">



<!-- Begin Breadcrumbs -->

<div id="breadcrumbs"><?php if (!is_page('Home')) { bcn_display(); } ?></div>

<!-- End Breadcrumbs -->

