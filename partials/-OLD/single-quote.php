    <?php 
      $format_link = get_post_format_link($format); 
      $format = get_post_format( $post_id );
    ?>
    <article class="quote<?php if(is_single()){ echo ' single'; } else { echo $odd; } ?>">
        <header>
            <p class="date"><a href="<?php the_permalink() ?>"><time datetime="<?php the_time('Y-n-d'); ?>"><?php the_time('d M, Y'); ?></time></a> <span class="bullet">&bull;</span> <a href="<?php comments_link(); ?>" title="Comments"><?php comments_number('0','1','%'); ?> Comments</a></p>  
        </header>
        <section>
			  <blockquote>
                <?php the_content(''); ?>
                <?php if(has_ref_link()) { ?>
				   <p class="author"><a href="<?php get_ref_link(); ?>"><?php the_title(); ?></a></p>
			    <?php } else { ?>
                   <p class="author"><?php the_title(); ?></p>
                <?php } ?>
			  </blockquote>
			  <?php get_references(); ?>
			  </section>
          <footer>
            <?php the_category(', '); ?> <span class="bullet">&bull;</span> <i class="fa fa-tag"></i> <?php the_tags('<span class="tags">', ', ', '</span>'); ?><?php edit_post_link('Edit Post', ' <span class="bullet">&bull;</span> <i class="fa fa-pencil-square-o"></i> ', '');?>
          </footer>
      </article>