<?php 
/*
Template Name: Archives
*/
get_header(); ?>
    
<?php if (have_posts()) : ?>

      <div id="page_header" class="archives-master">
      	<div class="wrapper">
          <div class="fade-in-up">
           <h1 class="pagetitle">Archives</h1>
           <div class="clearfix">
            <section>
              <ul class="cats">
                <?php listCats(); ?>       
              </ul>
            </section>
           </div>
         </div>
        </div>
      </div>
			<?php /*<article class="clearfix">
                <?php smart_archives(); ?>
			</article>
      <hr />*/ ?>
      <article>
        <div class="wrapper tag_list clearfix">
          <section>
            <h2>
              Topics
            </h2>
            <?php get_my_tags(64); ?>
          </section>
        </div>
      </article>
<?php endif; ?>
<?php get_footer(); ?>

