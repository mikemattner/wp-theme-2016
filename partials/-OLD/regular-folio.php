			<article class="project portfolio clearfix <?php echo ($num % 2 != 0) ? 'left' : 'right'; ?>">
			  <section class="thumb">
			    <div class="image"><?php 
                	if ( has_post_thumbnail() ) {
                		the_post_thumbnail('images-portfolio-thumb');
                	} else {
                		get_port_icon_image($post->ID);
                	}
              	?>
                </div>
			    <header>
					<section class="projects-title">
                		<h2><?php the_title(); ?></h2>
                		<p><i class="icon-circle-blank"></i></p>
                		<p><?php get_port_date($post->ID,'',''); ?></p>
              		</section>
              		<a href="<?php the_permalink() ?>" class="permalink">Permalink</a>			    	
			    </header>
			  </section>
			</article>