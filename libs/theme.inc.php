<?php
/**
 * @package MikeMattner_theme_core_functions
 * @version 2.0
 */

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
    wp_register_style( 'mm-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Slab:300,700', array(), '', 'all' );
    wp_enqueue_style( 'mm-google-fonts' );
    wp_register_style( 'mm-css', get_template_directory_uri() . '/assets/css/production.min.css', array(), '2017-06-19T15:38', 'all' );
    wp_enqueue_style( 'mm-css' );
  }
}

// Adding WP 3+ Functions & Theme Support
function mm_theme_support() {
	add_theme_support( 'post-formats',      // post formats
		array( 
			'link',    // quick link to other site
			'quote',   // a quick quote
			'image',   // a single image
		)
	);
	add_theme_support( 'menus' );            // wp menus
	register_nav_menus(                      // wp3+ menus
		array( 
			'primary_menu' => 'Primary Menu'   // main nav in header
		)
	);
    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' ); // posts and portfolio only
        set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   
    }

    if ( function_exists( 'add_image_size' ) ) { 
        add_image_size( 'images-full', 960, 9999 ); //960 pixels wide (and unlimited height)
        add_image_size( 'images-content-width', 680, 9999 ); //(max-content width)
        add_image_size( 'images-half', 500, 9999 ); //(reduced in size)
        add_image_size( 'images-thumb', 220, 220, true ); //(reduced in size)
        //add_image_size( 'images-portfolio-thumb', 430, 300, true ); //(reduced in size)
        //add_image_size( 'images-portfolio-full', 1024, 9999 ); //(reduced in size)
        //add_image_size( 'images-projects-thumbs', 430, 300, true ); //(reduced in size)
    }
  if ( ! isset( $content_width ) ) $content_width = 760;
}

//For filtering embedded video/media
add_filter( 'embed_oembed_html', 'mm_oembed_filter', 10, 4 ) ; 
function mm_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<figure class="embed-container">'.$html.'</figure>';
    return $return;
}

//Naming our custom thumbnail sizes
add_filter( 'image_size_names_choose', 'mm_custom_image_sizes_choose' );  
function mm_custom_image_sizes_choose( $sizes ) {  
    $custom_sizes = array(  
        'images-full' => '960 Width',
        'images-content-width' => 'Content Width',
        'images-projects-thumbs' => 'Project Thumb Width',
    );  
    return array_merge( $sizes, $custom_sizes );  
}

 
/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function mm_register_sidebars() {
    register_sidebar(array(
    	'id' => 'primary',
    	'name' => 'Primary',
    	'description' => 'The first (primary) sidebar.',
    ));
    
	register_sidebar(array(
    	'id' => 'secondary',
    	'name' => 'Secondary',
    	'description' => 'The second (secondary) sidebar.',
    	
    ));
	
} // don't remove this bracket!

/************* COMMENT FILTER *********************/	
// add_filter('get_comments_number', 'comment_count', 0);
// function comment_count( $count ) {
//     if ( ! is_admin() ) {
//         global $id;
//         $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
//         return count($comments_by_type['comment']);
//     } else {
//         return $count;
//     }
// }

/************* COMMENT LAYOUT *********************/
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
        <div class="comment_area">
           <div class="avat">
		       <?php echo get_avatar( $comment, 100 ); ?>
           </div>
           <p class="comment_author"><?php comment_author_link() ?></p>
           <p class="comment_date"><a href="#comment-<?php comment_ID() ?>"><?php if(!function_exists('how_long_ago')){comment_date() . ' @ ' . comment_time(); } else { echo how_long_ago(get_comment_time('U')); } ?></a></p>
	       <?php comment_text() ?>
           <p class="reply small"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></p>
        </div>
     </div>
<?php
}

/************* BODY CLASS *********************/
function mm_body_class() {
	$i = true;
    $classes = 'class="';
	switch($i) {
		case (is_front_page()):
			$classes .= 'home ';
		break;

		case (("mm_portfolio" == get_post_type())):
			$classes .= 'work ';
		break;

		case (is_single() || is_category() || is_tag() || is_search() /*|| is_page_template('archives.php')*/ ):
			$classes .= 'notebook ';
		break;
	}
	return $classes . 'fade-content"';
}

function mm_content_class() {


    $i = true;
    switch($i) {
        case (is_single()):
            $classes = ' class="single"';
        break;

        default:
            $classes = '';
        break;
    }
    echo $classes;

}
		
/************* NAVIGATION LINKS *********************/

function show_posts_nav() {
   global $wp_query;
   return ($wp_query->max_num_pages > 1);
}

function mm_archive_navigation(){
  if (show_posts_nav()){
    echo '<nav class="navigation">';
    new_previous_posts_link('Newer');
    new_next_posts_link('Older');
    echo '</nav>';
  }
}

function mm_single_navigation(){
    echo '<nav class="navigation navigation-single">';
    new_previous_post_link('%link','Older');
    new_next_post_link('%link','Newer');
    echo '</nav>';
}

function mm_portfolio_navigation(){
    new_previous_post_link('%link','', TRUE, $classcall='prev');
    new_next_post_link('%link','', TRUE, $classcall='next');
}

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

?>