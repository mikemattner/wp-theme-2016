<?php 
/*
Template Name: Master Archives
*/
get_header(); ?>
    
<?php if (have_posts()) : ?>

      <div id="page_header" class="archives-master">
      	<div class="wrapper">
          <div class="fade-in-up">
           <h1 class="pagetitle"><span>Search My</span> Archives</h1>
            <section>
              <ul class="cats">
                <?php listCats(); ?>       
              </ul>
            </section>
         </div>
        </div>
      </div>
			<article class="clearfix">
                <?php smart_archives(); ?>
			</article>
      <!-- <hr />
      <article>
        <div class="wrapper tag_list clearfix">
          <section>
            <h2>
              Topics
            </h2>
            <?php get_my_tags(64); ?>
          </section>
        </div>
      </article> -->
<?php endif; ?>
<?php get_footer(); ?>

