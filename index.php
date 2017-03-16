<?php
/*
Template Name: notebook
*/
get_header(); ?>
<?php query_posts($query_string . '&cat=-93,-549'); ?>    
<?php if (have_posts()) : ?>
  <?php $n = 0; ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php      
      if ($n > 0) {
        echo '<hr />';
      }
      $n++;
    ?>
    <?php include(TEMPLATEPATH . '/post.php'); ?>
  <?php endwhile; ?>

  <?php mm_archive_navigation(); ?>
<?php endif; ?>
<?php get_footer(); ?>