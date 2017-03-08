        
			
			<div id="page_header" class="port_header">
                <?php mm_portfolio_navigation(); ?>
                <h1 class="pagetitle"><?php the_title(); ?></h1>
				<p class="status">
				  <?php get_port_date($post->ID,'',''); ?>
				  <?php echo get_port_project_type($post->ID,' / ',''); ?>
				</p>
            </div>
            <article class="portfolio">	
                <section>		
                <?php the_content('Read the rest of this entry &raquo;'); ?>
                <p class="clearfix site_link"><?php get_port_site_link() ?></p>
                <hr />
                <?php
                /**/
                ?>
                <aside class="port_meta clearfix">                   
                    <?php list_port_role($post->ID); ?>
                    <?php list_port_features($post->ID); ?>
                </aside>
                
                <hr />
                <p class="img"><?php get_port_primary_image($post->ID); ?></p>
                <?php get_port_secondary_images($post->ID); ?>
                </section>
            </article>
			<?php //if(is_single()){ display_ads(); } ?>