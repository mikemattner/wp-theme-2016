        <article class="entry<?php if(is_single()){ echo ' single'; } else { echo $odd; } ?>">
          <header>
            <?php get_template_part( 'components/blog/post', 'header-meta' ); ?>
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
            <?php get_template_part( 'components/blog/post', 'footer-meta' ); ?>
          </footer>
        </article>