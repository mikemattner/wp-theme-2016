		    <article class="images archive">
          <section class="lightbox">  
            <header>
		          <section class="images-title">
                <p class="date"><time datetime="<?php the_time('Y-n-d'); ?>"><?php the_time('d M, Y'); ?></time> <span class="bullet">&bull;</span> <?php comments_number('0','1','%'); ?> Comments</p>
                <h2><?php the_title(); ?></h2>
              </section>
              <a href="<?php the_permalink() ?>" class="permalink">Permalink</a>
            </header>
            <section class="images-fullsize">
              <?php 
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail('images-half');
                }
              ?>
            </section>
          </section>
        </article>