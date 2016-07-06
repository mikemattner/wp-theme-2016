<?php get_header(); ?>
<?php query_posts($query_string . '&cat=-93,-549'); ?>    
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php if (have_posts()) : ?>
            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		    <div id="page_header" class="archives-search">
		    	<div class="wrapper">
                <div class="fade-in-up">
                   <h1 class="pagetitle">Search Results for "<?php the_search_query(); ?>"</h1>
                </div>
                </div>
            </div>
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
			
			<?php else: ?>
			<div id="page_header">
			<div class="wrapper">
                   <h1 class="pagetitle">No Results for "<?php the_search_query(); ?>"</h1>
            </div>
            </div>
			<article class="entry">
			  <section>
			  <p>Sorry, but nothing matched your search criteria. However, that doesn't mean you should stop looking. Totally keep trying with the same words over and over again. Obsession is healthy.</p>
			  </section>
		    </article>
			
			<?php endif; ?>
            
		
<?php get_footer(); ?>
