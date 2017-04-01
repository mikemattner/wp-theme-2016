<?php
/*
Template Name: This be a page
*/
 get_header(); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    <div id="page_header" class="page">
		    	<div class="wrapper">
			        <div class="fade-in-up">
			        <h1 class="pagetitle"><?php the_title(); ?></h1>
			        </div>
			     </div>
            </div>
			<article>
			   <section>
			    <?php the_content(); ?>
			   </section>
			</article>			
		<?php endwhile; endif; ?>
<?php get_footer(); ?>
