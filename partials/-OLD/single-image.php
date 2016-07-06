    <?php 
      $format_link = get_post_format_link($format); 
      $format = get_post_format( $post_id );
    ?>
        <article class="images<?php if(is_single()){ echo ' single'; } else { echo $odd; } ?>">
          <p class="date"><a href="<?php the_permalink() ?>"><time datetime="<?php the_time('Y-n-d'); ?>"><?php the_time('d M, Y'); ?></time></a> <span class="bullet">&bull;</span> <a href="<?php comments_link(); ?>" title="Comments"><?php comments_number('0','1','%'); ?> Comments</a></p>  
          <section class="lightbox">  
            <header>
		          <section class="images-title">
                <h2><?php the_title(); ?></h2>
              </section>
              <a href="<?php the_permalink() ?>" class="permalink">Permalink</a>
            </header>
            <section class="images-fullsize">
              <?php 
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail('images-full');
                }
              ?>
            </section>
          </section>
          <?php if(is_single()){ ?>
          <section class="images-content">
            <?php the_content('Read the rest of this entry &raquo;'); ?>
				    <?php get_references(); ?>
          </section>
          <?php } ?>
          <footer>
            <?php the_category(', '); ?> <span class="bullet">&bull;</span> <i class="fa fa-tag"></i> <?php the_tags('<span class="tags">', ', ', '</span>'); ?><?php edit_post_link('Edit Post', ' <span class="bullet">&bull;</span> <i class="fa fa-pencil-square-o"></i> ', '');?>
          </footer>
        </article>