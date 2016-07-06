<article id="comments">
<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}

/*
<!-- You can start editing here. -->*/ ?>
<h3 class="comments_header"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

<?php if ( have_comments() ) : ?>


<div id="commentslist">

	<ol class="commentlist">
      <?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
    </ol>

</div>
<?php 
    foreach ($comments as $comment) : 
        $comment_type = get_comment_type(); 
        if($comment_type == 'comment') {   } else { $trackback = true; } 
    endforeach;
?>
	
<?php if ($trackback == true) { ?>
 <div id="trackbacker">
     <h3>Trackbacks</h3>
        <ol class="trackback">
      <?php foreach ($comments as $comment) : ?>
         <?php $comment_type = get_comment_type(); ?>
             <?php if($comment_type != 'comment') { ?>
               <li><?php comment_author_link() ?></li>
             <?php } ?>
         <?php endforeach; ?>
        </ol>
  </div>
<?php } ?>
   
 
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<div id="respond" class="clearfix">
<div id="comments-sec" class="all_forms">

<h3 class="leave_a_reply"><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>
<p id="cancel-comment-reply" class="small">
	<?php cancel_comment_reply_link() ?>
</p>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
  <fieldset>
    <dl class="details">
    <dt><label for="comment">Comment</label></dt>
	<dd><textarea name="comment" class="textarea" id="comment" cols="50%" rows="5" tabindex="1"></textarea></dd>
	</dl>
<?php if ( $user_ID ) : ?>
<p class="logged_in">
Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a><br /><br />
</p>
<?php else : ?>
    <dl class="details">
	<dt><label for="author">Name</label></dt>
	<dd><input type="text" name="author" class="formfield-c" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> /></dd>
    </dl>
	<dl class="details">
    <dt><label for="email">Email</label></dt>
	<dd><input type="text" name="email" class="formfield-c" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="3" <?php if ($req) echo "aria-required='true'"; ?> /></dd>
    </dl>
    <dl class="details">
	<dt><label for="url">Website</label></dt>
    <dd><input type="text" name="url" class="formfield-c" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="4" /></dd>
	</dl>
<?php endif; ?>

	<p><button type="submit" name="submit" class="subme"><i class="icon-comment"></i> Comment</button></p>
    <?php comment_id_fields(); ?>
    <?php do_action('comment_form', $post->ID); ?>
  </fieldset>
</form>
</div>
</div>
<?php endif; // If registration required and not logged in ?>

<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>

<?php endif; // if you delete this the sky will fall on your head ?>

</article>
