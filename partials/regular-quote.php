    <article class="quote<?php if(is_single()){ echo ' single'; } ?>">
        <header>
            <?php get_template_part( 'components/blog/post', 'header-meta' ); ?>
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
          <?php get_template_part( 'components/blog/post', 'footer-meta' ); ?>
        </footer>
      </article>