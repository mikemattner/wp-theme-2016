
    <article class="link<?php if(is_single()){ echo ' single'; } ?>">
          <header>
            <?php get_template_part( 'components/blog/post', 'header-meta' ); ?>
            <?php if(has_ref_link()) { ?>
		        <h2><a href="<?php get_ref_link(); ?>" rel="bookmark" title="Link to <?php get_ref_link(); ?>"><i class="fa fa-dot-circle-o"></i> <?php the_title(); ?></a></h2>
			     <?php } else { ?>
			     <h2><?php the_title(); ?></h2>
			     <?php } ?>
          </header>
          <section>
          <?php the_content('Read the rest of this entry &raquo;'); ?>
		      <?php get_references(); ?>
          </section>
          <footer>
            <?php get_template_part( 'components/blog/post', 'footer-meta' ); ?>
          </footer>
        </article>