<?php
/*
Template Name: portfolio_wp
*/

//adding qr javascript file in the footer
wp_register_script( 'mm-masonry-js', get_template_directory_uri() . '/assets/js/js.php?js=masonry.js&f=masonry', array( 'jquery' ), '2012-02-15-1537', true );
wp_enqueue_script( 'mm-masonry-js' );

get_header(); 
?>

        <div id="main" role="main">
            
		    <div id="page_header" class="project-header">
		    	<div class="wrapper">
                   <h1 class="pagetitle">Selected Work</h1>
                   <p>A small sampling of freelance work and work completed in my day job, as well as a few WordPress related experiments.</p>
                </div>
            </div>
            <article class="entry">
		    
			
<?php
//Web & Print Design---------------------------------------------------------------------
$args=array(
  'post_type'      => 'mm_portfolio',
  'posts_per_page' => 25,
  'mm-projecttype' => 'Web,Print,email-2'
);
$temp     = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query($args);
            if ($wp_query->have_posts()) : 
                 
                 /*$num = 1;		
			     while ($wp_query->have_posts()) : $wp_query->the_post(); 
					  include(TEMPLATEPATH . '/regular-folio.php');
				      $num++;
				 endwhile;*/
				 

				 echo '<div class="portfolio-block-list clearfix"><ul id="folio">';			
			     while ($wp_query->have_posts()) : $wp_query->the_post(); 
					  include(TEMPLATEPATH . '/block-folio.php');
				 endwhile;
				 echo '</ul></div>';

            endif; $wp_query = null; $wp_query = $temp; ?>
        </article>
        <hr />
        <article class="entry">
<?php
//WordPress Plugins-----------------------------------------------------------
$temp     = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('post_type=mm_portfolio&showposts=25'.'&paged='.$paged.'&taxonomy=mm-projecttype&term=WordPress Plugin');

            if ($wp_query->have_posts()) : 
                 echo '<div class="portfolio-block-list clearfix"><h2 class="normal">WordPress Plugins</h2><ul>';			
			     while ($wp_query->have_posts()) : $wp_query->the_post(); 

					  include(TEMPLATEPATH . '/plugin-folio.php');

				 endwhile;
				 echo '</ul></div>';
            endif; $wp_query = null; $wp_query = $temp; ?>
			
					</article>	
            
        </div>

            
                    



<?php get_footer(); ?>
