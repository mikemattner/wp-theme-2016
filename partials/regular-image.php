        <article class="images<?php echo $odd;?>">
          <?php get_template_part( 'components/blog/post', 'header-meta' ); ?>
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
            <?php get_template_part( 'components/blog/post', 'footer-meta' ); ?>
          </footer>
        </article>