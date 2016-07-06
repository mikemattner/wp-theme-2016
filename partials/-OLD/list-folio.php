<?php /*
<li>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php get_port_primary_image(); ?>
<span><?php the_title(); ?><?php get_port_date($post->ID,' <em>',''); ?><?php get_port_project_type($post->ID,' / ','</em>'); ?></span>
</a>
</li> 

<article class="portfolio">	
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="status">
				  <?php get_port_date($post->ID,'',''); ?>
				  <?php echo get_port_project_type($post->ID,' / ',''); ?>
				</p>
				<?php get_port_site_link() ?>			
                <?php get_port_primary_image($post->ID); ?>
                <?php //get_port_secondary_images($post->ID); ?>
				the_content(''); 
				<aside class="port_meta">					
				    <?php get_port_taxonomy($post->ID); ?>
                </aside>
</article>*/ ?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><span class="date"><?php get_port_date($post->ID,'',''); ?></span><?php the_title(); ?></a></li>