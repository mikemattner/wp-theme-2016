<?php
/**My Theme**/
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
global $paged, $wp_query;
$max_page = $wp_query->max_num_pages;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
    <title><?php if ( $paged < 2 ) { } else { echo (' Page '); echo ($paged . " &bull; ");} ?><?php wp_title(' &bull; ', true, 'right'); ?><?php  if (!is_page()) : ?> <?php if (is_single()) { if (in_category(93)) { ?>Portfolio &bull;<?php } else { ?>Notebook &bull;<?php } } else { ?>Notebook &bull;<?php } endif; ?> Mike Mattner</title>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/assets/js/css3-mediaqueries.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-16x16.png" sizes="16x16" />
        
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/vendor/font-awesome.min.css" media="all" />
    
  </head>
  
<body <?php body_class(mm_body_class()); ?> lang="en">
<header id="header" class="fixed cbp-af-header" role="banner">
  <div class="wrapper clearfix">
    <a href="http://www.mikemattner.com" id="mylogo" class="clearfix">
      <span class="logo-img"><?php include(TEMPLATEPATH . '/assets/images/logo_alt.svg') ?></span>
      <span class="logo-title">Mike Mattner</span>
    </a>
    <nav role="navigation">
        <ul>
            <?php 
                $args = array(
                        'theme_location'  => 'primary_menu', 
                        'container'       => '', 
                        'container_class' => '', 
                        'container_id'    => '',
                        'menu_class'      => '', 
                        'menu_id'         => '',
                        'items_wrap'      => '%3$s');
                wp_nav_menu($args);
      ?>
        </ul>
    </nav>
  </div>
</header>
<div id="page_wrapper"<?php /*if(is_single()) { echo ' class="single"';} else if(is_home()) { echo ' class="home"';}*/  mm_content_class(); ?>>
    <div id="content">
  <?php /**/ if (is_home()) { ?>
    <div id="page_header" class="home entry-header">
      <div class="wrapper">
        <div class="fade-in-up">
        <h1 class="pagetitle">Notebook</h1>
        <p><?php if ( $paged > 1 ) { echo (' Page '); echo ($paged . " of " . $max_page); } else {echo (' Page '); echo ("1 of " . $max_page); } ?></p>
        </div>
      </div>
    </div>
  <?php } ?>