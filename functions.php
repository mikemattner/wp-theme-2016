<?php
/**
 *
 *
 * @package MikeMattner_theme_core_functions
 * @version 2.0
 */

require_once 'libs/theme.inc.php';                      //Sidebars, Custom Menus, Comments
require_once 'libs/wordpress_function_updates.inc.php'; //Customizing core Wordpress functions
require_once 'libs/custom_functions.inc.php';           //Adding in a few custom functions


// Adding theme items.
add_action( 'init', 'mm_head_cleanup' );                      // cleaning up the WP head
add_filter( 'the_generator', 'mm_rss_version' );              // removes WP version from RSS
add_action( 'widgets_init', 'mm_register_sidebars' );         // register sidebars
add_action( 'after_setup_theme', 'mm_theme_support' );       // launching this stuff after theme setup
add_action( 'wp_enqueue_scripts', 'mm_queue_js', 1 );         // enqueue base scripts
add_action( 'wp_enqueue_scripts', 'mm_queue_css', 999 );      // enqueue base styles
add_action( 'wp_head', 'mm_ext' );                            // theme extras

/*************************************************************************************************************/


// loading our js, jquery, and reply elements on single pages automatically
function mm_queue_js() {
  if ( !is_admin() ) {

    //adding scripts file in the footer
    //Unminified for testing
    //wp_register_script( 'mm-js', get_template_directory_uri() . '/dev/js/build/production.js', array( 'jquery' ), '2013-02-14-1537', true );

    //Production JavaScript
    wp_register_script( 'mm-js', get_template_directory_uri() . '/assets/js/production.min.js', array( 'jquery' ), '2013-02-14-1537', true );
    wp_enqueue_script( 'mm-js' );

    //enqueu comment-reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_deregister_script( 'comment-reply' );
      wp_register_script( 'comment-reply', get_site_url() . '/wp-includes/js/comment-reply.js', array( 'jquery' ), null, true );
      wp_enqueue_script( 'comment-reply' );
    }
  }

}

//load our styles
function mm_queue_css() {
  if ( !is_admin() ) {
    // register stylesheet
    //wp_register_style( 'mm-google-fonts', '//fonts.googleapis.com/css?family=Merriweather:300,300i,700,700i', array(), '', 'all' );
    //wp_enqueue_style( 'mm-google-fonts' );
    wp_register_style( 'mm-css', get_template_directory_uri() . '/assets/css/production.min.css', array(), '2017-06-19T15:38', 'all' );
    wp_enqueue_style( 'mm-css' );
  }
}


//Loading TypeKit and Google Analytics
function mm_ext() {
  mm_typekit();
  mm_google_analytics();
}

//TypeKit Javascript
function mm_typekit() {
  echo '<script src="https://use.typekit.net/sie8fvr.js"></script>';
  echo '<script>try{Typekit.load({ async: true });}catch(e){}</script>';
}

//Google Analytics
function mm_google_analytics() {
  echo "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2423210-1', 'auto');
  ga('send', 'pageview');

</script>";
}

// Cleaning up the Wordpress Head
function mm_head_cleanup() {
  // remove header links
  remove_action( 'wp_head', 'feed_links_extra', 3 );                    // Category Feeds
  remove_action( 'wp_head', 'feed_links', 2 );                          // Post and Comment Feeds
  remove_action( 'wp_head', 'rsd_link' );                               // EditURI link
  remove_action( 'wp_head', 'wlwmanifest_link' );                       // Windows Live Writer
  remove_action( 'wp_head', 'index_rel_link' );                         // index link
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );            // previous link
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );             // start link
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Links for Adjacent Posts
  remove_action( 'wp_head', 'wp_generator' );                           // WP version
  wp_deregister_script( 'wp-embed' );                                       //WP Embed Removal

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

// remove WP version from RSS
function mm_rss_version() { return ''; }

function mmTags() { 
  if( $tags = get_the_tags() ) {
      echo '<span class="tags">';
      foreach( $tags as $tag ) {
          $sep = ( $tag === end( $tags ) ) ? '' : ', ';
          echo '<a href="' . get_term_link( $tag, $tag->taxonomy ) . '">#' . $tag->name . '</a>' . $sep;
      }
      echo '</span>';
  }
}

function mmPaged() {
  global $paged, $wp_query;
  $max_page = $wp_query->max_num_pages;
  if ( $paged > 1 ) { 
    $output = 'Page ' . $paged . " of " . $max_page; 
  } else {
    $output = 'Page ' . '1 of ' . $max_page;
  }

  return $output;
}