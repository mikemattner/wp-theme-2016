        <article class="entry<?php if(is_single()){ echo ' single'; } else { echo $odd; } ?>">
          <header>
            <p class="date"><a href="<?php the_permalink() ?>"><time datetime="<?php the_time('Y-n-d'); ?>"><?php the_time('d M, Y'); ?></time></a> <span class="bullet">&bull;</span> <a href="<?php comments_link(); ?>" title="Comments"><?php comments_number('0','1','%'); ?> Comments</a><?php edit_post_link('Edit Post', ' <span class="bullet">&bull;</span> ', '');?></p>  
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          </header>
          <?php if ( has_post_thumbnail() ) { ?>
          <section class="lightbox">
          <section class="images-fullsize">
            <?php 
                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
                echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
                  the_post_thumbnail('images-full');
                echo '</a>';
            ?>
            </section>
          </section>
          <?php } ?>
          <section>
          <?php the_content('Read the rest of this entry &raquo;'); ?>
		      <?php get_references(); ?>
          </section>
          <footer>
             <i class="fa fa-tag"></i> <?php the_tags('<span class="tags">', ', ', '</span>'); ?> <span class="bullet">&bull;</span> <i class="fa fa-file-text"></i> <?php the_category(', '); ?>
          </footer>
        </article>