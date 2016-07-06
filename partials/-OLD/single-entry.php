      <div id="page_header" class="page entry-header">
            <div class="wrapper fade-in-up">
            <h2 class="pagetitle"><?php the_title(); ?></h2>
            <p class="date"><time datetime="<?php the_time('Y-n-d'); ?>"><?php the_time('d M, Y'); ?></time></p>  
            </div>
      </div>
        <article class="entry<?php if(is_single()){ echo ' single'; } else { echo $odd; } ?>">
          <section>
          <?php the_content('Read the rest of this entry &raquo;'); ?>
		      <?php get_references(); ?>
          </section>
          <footer>
            <?php the_category(', '); ?> <span class="bullet">&bull;</span> <i class="fa fa-tag"></i> <?php the_tags('<span class="tags">', ', ', '</span>'); ?><?php edit_post_link('Edit Post', ' <span class="bullet">&bull;</span> <i class="fa fa-pencil-square-o"></i> ', '');?>
          </footer>
        </article>