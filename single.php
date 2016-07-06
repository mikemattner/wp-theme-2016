<?php get_header(); ?>
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
	<?php include(TEMPLATEPATH . '/post.php'); ?>
	<?php endwhile; ?>
    <section id="comments-surround">
    <?php comments_template();  ?>
    </section>
	<?php mm_single_navigation(); ?>
<?php endif; ?>
<?php get_footer(); ?>
