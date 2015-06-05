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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-60659101-1', 'auto');
  ga('send', 'pageview');
 </script>
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