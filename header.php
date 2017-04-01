<?php
/**My Theme**/
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
    <title><?php if ( $paged < 2 ) { } else { echo (' Page '); echo ($paged . " &bull; ");} ?><?php wp_title(' &bull; ', true, 'right'); ?><?php  if (!is_page()) : ?> <?php if (is_single()) { if (in_category(93)) { ?>Portfolio &bull;<?php } else { ?>Notebook &bull;<?php } } else { ?>Notebook &bull;<?php } endif; ?> Mike Mattner</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-16x16.png" sizes="16x16" />
        
    <?php wp_head(); ?>
  </head>
  
<body <?php echo mm_body_class(); ?> lang="en">
<header id="header" class="fixed cbp-af-header" role="banner">
  <div class="wrapper clearfix">
    <?php get_template_part( 'components/header/site', 'branding' ); ?>
    <?php get_template_part( 'components/navigation/navigation', 'top' ); ?>
  </div>
</header>
<div id="page_wrapper"<?php mm_content_class(); ?>>
  <div id="content">
  <?php  if (is_home()) { 
    get_template_part( 'components/blog/page', 'header' );
  } ?>