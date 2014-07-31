<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

	<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

<?php
	return;
		}
	}
?>

<!-- Begin Post Comments -->
<div id="commments">
<?php if ($comments) : ?>
	<h2><a href="#comments" name="comments"><?php comments_number('No Comments', '1 Comment', '% Comments' );?>:</a></h2>
	<?php foreach ($comments as $comment) : ?>
		<div class="comment-item" id="comment-<?php comment_ID() ?>">
        	<?php echo show_avatar( $comment, 60 ); ?>
			<p class="comment-author"><?php comment_author_link(); ?></p>
            <p class="comment-date"><?php comment_date('M j, Y'); ?> at <?php comment_time(); ?></p>
			<?php if ($comment->comment_approved == '0') : ?>
			<p><em>Your comment is awaiting moderation.</em></p>
			<?php endif; ?>
			<?php /*comment_text(); */?>
            <p class="comment-reply"><?php echo $comment->comment_content; ?></p>
		</div><!-- .comment-item -->
	<?php endforeach; /* end for each comment */ ?>
	

<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : // comments are open, but there are no comments ?>
		<!-- <p class="comments-none">There are no comments.</p> -->
	 <?php else : // comments are closed ?>
		<p class="comments-closed">Comments are closed.</p>
	<?php endif; ?>
    
<?php endif; // end if comments ?>

<?php if ('open' == $post->comment_status) : // if comments are open ?>

<h2>Leave a Reply:</h2>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment-form">
	<?php if ( $user_ID ) : ?>
    <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>
    <?php else : ?>
	<p>Don't forget to get your <a href="http://en.gravatar.com/" target="_blank">Globally Recognized Avatar</a>.</p>
	<label for="author">Name:</label>
    <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" />
	<label for="email">eMail:</label>
    <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" />
	<label for="url">Website:</label>
    <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" />
	<?php endif; ?>
    <label for="comment">Comment:</label>
	<textarea name="comment" id="comment" cols="40" rows="10" tabindex="4"></textarea>
	<input name="submit" type="submit" class="submit" tabindex="5" value="Submit Comment&nbsp;&raquo;" />
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	<?php do_action('comment_form', $post->ID); ?>
</form>

<?php endif; // if registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>

</div><!-- #commments -->