<li>
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
	<?php get_port_icon_image($post->ID); ?>
	<span class="info">
	    <span class="btn"><em><strong><?php the_title(); ?></strong></em></span>
	</span>
  </a>
</li>