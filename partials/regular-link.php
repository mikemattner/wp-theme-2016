    <?php /*
add this to links for icons 
class="fa-external-link"
<i class="fa fa-external-link"></i>
    */?>
    <article class="link<?php if(is_single()){ echo ' single'; } else { echo $odd; } ?>">
          <header>
            <p class="date"><a href="<?php the_permalink() ?>"><time datetime="<?php the_time('Y-n-d'); ?>"><?php the_time('d M, Y'); ?></time></a> <span class="bullet">&bull;</span> <a href="<?php comments_link(); ?>" title="Comments"><?php comments_number('0','1','%'); ?> Comments</a><?php edit_post_link('Edit Post', ' <span class="bullet">&bull;</span> ', '');?></p>             
            <?php if(has_ref_link()) { ?>
		        <h2><a href="<?php get_ref_link(); ?>" rel="bookmark" title="Link to <?php get_ref_link(); ?>"><i class="fa fa-dot-circle-o"></i> <?php the_title(); ?></a></h2>
			     <?php } else { ?>
			     <h2><i class="fa fa-dot-circle-o"></i> <?php the_title(); ?></h2>
			     <?php } ?>
          </header>
          <section>
          <?php the_content('Read the rest of this entry &raquo;'); ?>
		      <?php get_references(); ?>
          </section>
          <footer>
             <i class="fa fa-tag"></i> <?php the_tags('<span class="tags">', ', ', '</span>'); ?> <span class="bullet">&bull;</span> <i class="fa fa-dot-circle-o"></i> <?php the_category(', '); ?>
          </footer>
        </article>