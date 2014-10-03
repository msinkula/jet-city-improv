<?php get_sidebar('sidebar'); ?>

</div>
<!-- End Middle -->

<!-- Begin Footer -->
<div id="footer">

    <!-- Begin Footer Menu -->
    <div id="menu-footer">
    <nav class="footer-main">
    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    </nav>
    </div>
    <!-- End Footer Menu --> 
    
    <!-- Begin Site Info -->
    <div id="site-info">
    <p>&copy; 1992 - <?php echo date("Y"); ?> <a href="<?php get_site_url(); ?>"><?php bloginfo('name'); ?></a>. All rights reserved. <span class="alignright"><?php wp_register('','...'); ?>&nbsp;&nbsp;&nbsp;<?php wp_loginout(); ?>...</span></p>
    </div>
    <!-- End Site Info -->
    
</div>
<!-- End Footer -->

<!-- Begin Analytics -->

<!-- End Analytics -->

<!--[if lt IE 9]>
<script language="JavaScript" type="text/javascript">
alert("It appears that you are using an outdated version of Internet Explorer that does not support HTML5 or CSS3.")
</script><![endif]-->

<!-- Begin WP Footer -->
<?php wp_footer(); ?>
<!-- End WP Footer -->

</body>
</html>