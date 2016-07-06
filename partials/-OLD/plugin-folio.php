<?php 
$site_link = @get_post_custom_values('port_site_link');
  if($site_link != null) {
    foreach ( $site_link as $key => $value ) {
       $link = $value; 
    }
  }
?>
<li>
	<a href="<?php echo $link; ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
		<img src="http://www.mikemattner.com/wp-content/uploads/2012/10/wordpress.png" width="200" />
		<strong><?php the_title(); ?></strong>
		<span class="date"><?php get_port_date($post->ID,'',''); ?></span>
	</a>
</li>