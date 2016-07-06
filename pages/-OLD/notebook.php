<?php
/*
Template Name: notebook
*/
get_header(); ?>
<?php query_posts($query_string . '&cat=-93,-549'); ?>    
<?php if (have_posts()) : ?>
<?php if ( $paged > 1 ) {/* ?>
  <div id="page_header" class="archives-master">
        <div class="wrapper">
           <h1 class="pagetitle">Page <?php get_pagination(); ?></h1>
        </div>
  </div>
<?php */ } ?>
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
