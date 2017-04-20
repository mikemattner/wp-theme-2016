<?php get_header(); ?>
<?php query_posts($query_string . '&cat=-93,-549'); ?>    
<?php if (have_posts()) : ?>
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
      <div id="page_header" class="archives entry-header">
		    <div class="wrapper">
                <div class="fade-in-up">
                <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                   <?php /* If this is a category archive */ if (is_category()) { ?>
		<h1 class="pagetitle"><span>Things I've Posted in</span> &#8216;<?php single_cat_title(); ?>&#8217;</h1>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1 class="pagetitle"><span>Things I've Tagged</span> &#8216;<?php single_tag_title(); ?>&#8217;</h1>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1 class="pagetitle"><span>Archive for</span> <?php the_time('F jS, Y'); ?></h1>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1 class="pagetitle"><span>Archive for</span> <?php the_time('F, Y'); ?></h1>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1 class="pagetitle"><span>Archive for</span> <?php the_time('Y'); ?></h1>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="pagetitle">Author Archive</h1>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="pagetitle">Blog Archives</h1>
 	  <?php } elseif (is_tax()) {
	         $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	         $tax_term = $term->taxonomy;
	         echo '<h1 class="pagetitle">'.$tax_term . ': ' . $term->name . '</h1>';
           } ?>
              <p class="paged"><?php echo mmPaged(); ?></p>
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

<?php endif; ?>
<?php get_footer(); ?>