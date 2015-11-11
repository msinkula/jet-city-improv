<?php get_header(); ?>

<!-- Begin Spotlight -->
<div id="spotlight">
<?php add_flexslider(); ?>
</div>
<!-- End Spotlight -->

<!-- Begin Content Loop -->
<div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(''); ?>
<?php endwhile; ?>
<?php endif; ?>
</div>
<!-- End Content Loop -->

<!-- Begin Dynamic Mobile Sidebar -->
<div id="mobile">
<?php if (is_front_page()) : ?>
<?php dynamic_sidebar('mobile') ?> 
<?php endif; ?>	
</div>				
<!-- End Dynamic Mobile Sidebar -->
    
<!-- Begin News Loop -->
<div id="news">
<h1>From The Blog:</h1>
<?php rewind_posts(); // stop loop one ?>
<?php query_posts('showposts=5'); // show 5 latest posts ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<article class="post-box" id="post-box-<?php the_ID(); ?>">
    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?>&nbsp;&raquo;</a></h2>
    <p class="postdata">Posted on <?php the_time('M j, Y') ?> in <?php the_category(', ') ?></p>
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail(array(130,130)); ?></a>
    <?php the_excerpt(); ?>
    <p class="full-story"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Full Story &raquo;</a></p>
    </article>
<?php endwhile; ?>
<?php endif; ?>
<nav class="post-navigation">
    <span class="post-navigation-next"><a href="/blog/">More from the Blog &raquo;</a></span>
</nav>
</div>
<!-- End News Loop -->

<?php get_footer();?>