<?php get_header(); ?>
<?php //query_posts($query_string); ?>  
<?php if (have_posts()) : ?>
        <div id="main" role="main">
            <div class="wrapper">

            <?php while (have_posts()) : the_post(); ?>
		
		        <?php include(TEMPLATEPATH . '/single-folio.php'); ?>
				
		    <?php endwhile; ?>         

            </div>
        </div>
<?php endif; ?>

<?php get_footer(); ?>
