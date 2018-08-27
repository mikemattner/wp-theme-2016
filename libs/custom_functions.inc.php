<?php
/**
 * @package MikeMattner_theme_core_functions
 * @version 2.0
 */
function get_my_tags($tot)
{   
	$tags = get_tags();
 
	foreach($tags as $key => $tag)
	{
		if($tag->count < 2)
		{
			unset($tags[$key]);
		}
	}
     
  asort($tags);
  $tags = array_slice($tags, 0, $tot, TRUE);
  shuffle($tags);	
 
	$html = '<ul id="tags_cloud">';    
    
	foreach($tags as $tag)
	{
		    $html .= '<li><a href="' . esc_url( home_url( '/' ) ) .'tag/' . $tag->slug . '/">' . $tag->name . ' <em>' . $tag->count . '</em></a></li>';

	}
	$html .= '</ul>';
	echo $html;
}

function listCats() {
  $base    = get_option('category_base');
  $home   = get_option('home');
  
  if ( $home == NULL ){
     $url        = 'http://www.mikemattner.com';
  } else { $url = $home; }
  if ( $base == NULL ){
     $cat_base   = 'category';
  } else { $cat_base = $base; }
  
  $categories = get_categories();
  
  $tot_cat = 0;
  foreach($categories as $cat)
  {
         $tot_cat = $tot_cat + $cat->count;
  }
  
  foreach ($categories as $cat) {
            echo '<li><a href="'.$url.'/'.$cat_base.'/'.$cat->category_nicename.'/">'.$cat->cat_name.'</span></a></li>'; //<span style="width: '.$tag_width.'%">

  }
}

//get_the_time('U') - for entries
//get_comment_time('U') - for comments
if(!function_exists('how_long_ago')){
  function how_long_ago($timestamp){
            $difference = (time() - 18000) - $timestamp;

            if($difference >= 60*60*24*365){        // if more than a year ago
                $int = intval($difference / (60*60*24*365));
                $s = ($int > 1) ? 's' : '';
                $r = $int . ' year' . $s . ' ago';
            } elseif($difference >= 60*60*24*7*5){  // if more than five weeks ago
                $int = intval($difference / (60*60*24*30));
                $s = ($int > 1) ? 's' : '';
                $r = $int . ' month' . $s . ' ago';
            } elseif($difference >= 60*60*24*7){        // if more than a week ago
                $int = intval($difference / (60*60*24*7));
                $s = ($int > 1) ? 's' : '';
                $r = $int . ' week' . $s . ' ago';
            } elseif($difference >= 60*60*24){      // if more than a day ago
                $int = intval($difference / (60*60*24));
                $s = ($int > 1) ? 's' : '';
                $r = $int . ' day' . $s . ' ago';
            } elseif($difference >= 60*60){         // if more than an hour ago
                $int = intval($difference / (60*60));
                $s = ($int > 1) ? 's' : '';
                $r = $int . ' hour' . $s . ' ago';
            } elseif($difference >= 60){            // if more than a minute ago
                $int = intval($difference / (60));
                $s = ($int > 1) ? 's' : '';
                $r = $int . ' minute' . $s . ' ago';
            } else {                                // if less than a minute ago
                $r = 'moments ago';
            }
            
			if($difference >= 60*60*24*365){
			  comment_date(); echo ' @ '; comment_time();
			} else {
              return $r;
			}
			
  }
}

?>