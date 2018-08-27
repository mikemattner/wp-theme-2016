<?php
/**
 * @package MikeMattner_theme_core_functions
 * @version 2.0
 */
 
/* new_get_next_posts_link:  *******************************
 * Replace theme tags "next_posts_link
 */
function new_get_next_posts_link( $label = 'Next Page &raquo;', $max_page = 0 ) {
	global $paged, $wp_query;

	if ( !$max_page ) {
		$max_page = $wp_query->max_num_pages;
	}

	if ( !$paged )
		$paged = 1;

	$nextpage = intval($paged) + 1;

    if ( !is_single() ) {
        if( empty($paged) || $nextpage <= $max_page) {
		$attr = apply_filters( 'next_posts_link_attributes', '' );
		return '<a href="' . next_posts( $max_page, false ) . "\" class=\"next\" $attr>". preg_replace('/&([^#])(?![a-z]{1,8};)/', '&#038;$1', $label) .'</a>';
        } else {
        $attr = apply_filters( 'next_posts_link_attributes', '' );
		return '<span class="next_blank" '.$attr.'>'. preg_replace('/&([^#])(?![a-z]{1,8};)/', '&#038;$1', $label) .'</span>';
        }
	}
}
function new_next_posts_link( $label = 'Next Page &raquo;', $max_page = 0 ) {
	echo new_get_next_posts_link( $label, $max_page );
}

/* new_get_previous_posts_link:  *******************************
 * Replace theme tags "previous_posts_link"
 */
function new_get_previous_posts_link( $label = '&laquo; Previous Page' ) {
	global $paged;

	if ( !is_single() && $paged > 1 ) {
		$attr = apply_filters( 'previous_posts_link_attributes', '' );
		return '<a href="' . previous_posts( false ) . "\" class=\"prev\" $attr>". preg_replace( '/&([^#])(?![a-z]{1,8};)/', '&#038;$1', $label ) .'</a>';
	}
    if ( !is_single() ) {
        if( $paged > 1) {
		$attr = apply_filters( 'previous_posts_link_attributes', '' );
		return '<a href="' . previous_posts( false ) . "\" class=\"prev\" $attr>". preg_replace( '/&([^#])(?![a-z]{1,8};)/', '&#038;$1', $label ) .'</a>';
        } else {
        $attr = apply_filters( 'previous_posts_link_attributes', '' );
		return '<span class="prev_blank" '.$attr.'>'. preg_replace( '/&([^#])(?![a-z]{1,8};)/', '&#038;$1', $label ) .'</span>';
        }
	}
}
function new_previous_posts_link( $label = '&laquo; Previous Page' ) {
	echo new_get_previous_posts_link( $label );
}

/*Replace theme tags "previous_post_link" and "next_post_link"-----*/
function new_previous_post_link($format='&laquo; %link', $link='%title', $in_same_cat = false, $excluded_categories = '') {
	new_adjacent_post_link($format, $link, $in_same_cat, $excluded_categories, true, 'prev');
}

function new_next_post_link($format='%link &raquo;', $link='%title', $in_same_cat = false, $excluded_categories = '') {
	new_adjacent_post_link($format, $link, $in_same_cat, $excluded_categories, false, 'next');
}

function new_adjacent_post_link($format, $link, $in_same_cat = false, $excluded_categories = '', $previous = true, $classcall) {
	if ( $previous && is_attachment() )
		$post = & get_post($GLOBALS['post']->post_parent);
	else
		$post = get_adjacent_post($in_same_cat, $excluded_categories, $previous);

	if ( !$post ) {
		$link = str_replace('%title', '', $link);
		echo '<span class="'.$classcall.'_blank">&nbsp;</span>'; //'. $link .'
        return;
    }
	$title = $post->post_title;

	if ( empty($post->post_title) )
		$title = $previous ? __('Previous Post') : __('Next Post');

	$title = apply_filters('the_title', $title, $post);
	$date = mysql2date(get_option('date_format'), $post->post_date);
	$rel = $previous ? 'prev' : 'next';

	$string = '<a href="'.get_permalink($post).'" class="'.$classcall.'" title="'.$title.'" rel="'.$rel.'">'; // '.$classcall.'_tooltip
	$link = str_replace('%title', $title, $link);
	$link = str_replace('%date', $date, $link);
	$link = $string . $link . '</a>';

	$format = str_replace('%link', $link, $format);

	$adjacent = $previous ? 'previous' : 'next';
	echo apply_filters( "{$adjacent}_post_link", $format, $link );
} 
?>