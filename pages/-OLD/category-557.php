<?php 
//adding qr javascript file in the footer
wp_register_script( 'mm-masonry-images-js', get_template_directory_uri() . '/assets/js/js.php?js=masonry-images.js&f=masonry-images', array( 'jquery' ), '2012-02-15-1537', true );
wp_enqueue_script( 'mm-masonry-images-js' );

get_header(); ?>
<?php query_posts($query_string . '&posts_per_page=50&cat=-93,-549'); ?>    
<?php if (have_posts()) : ?>
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <div id="page_header" class="image-archives">
		    <div class="wrapper">
                <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                <h1 class="pagetitle">&#8216;Images&#8217; I've Posted</h1>
            </div>
         </div>
         <section class="image-archive-surround">
         <section id="image-archive" class="clearfix">
	        <?php while (have_posts()) : the_post(); ?>
	        
	            <?php include(TEMPLATEPATH . '/regular-image-masonry.php'); ?>
         
            <?php endwhile; ?>
         </section>
     </section>
    <?php mm_archive_navigation(); ?> 

<?php endif; ?>
<?php get_footer(); ?>

