<?php get_header(); ?>

<!-- Begin Spotlight -->
<div id="spotlight">
<?php add_flexslider(); ?>
</div>
<!-- End Spotlight -->

<!-- Begin Mobile First Widgets 
<div id="mobile" class="page-<?php the_ID(); ?>">
<?php /*if (function_exists('dynamic_sidebar') && dynamic_sidebar('mobile') ) : else :*/ ?><?php /*endif;*/ ?>
</div>
 End Mobile First Widgets -->

<!-- Begin Content --> 
<div id="content">

<!-- Begin Content Loop -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(''); ?>
<?php endwhile; ?>
<?php endif; ?>
<!-- End Content Loop -->
    
<!-- Begin News Loop -->
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
    <span class="post-navigation-previous"><?php previous_posts_link('&laquo; Newer Postings'); ?></span>
    <span class="post-navigation-next"><?php next_posts_link('Older Postings &raquo;'); ?></span>
</nav>
</div>
<!-- End Content -->

<?php get_footer();?>