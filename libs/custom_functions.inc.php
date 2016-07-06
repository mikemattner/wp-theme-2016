<?php
/**
 * @package MikeMattner_theme_core_functions
 * @version 2.0
 */
function display_ads(){
    $display = '<div class="ad_pack_surround clearfix">
                  <div class="ad_surround">
                      <script type="text/javascript" src="http://cdn.adpacks.com/adpacks.js?legacyid=1270392&zoneid=1386&key=830239503ead81f089885398410dbb52&serve=C6SD52Y&placement=wwwmikemattnercom&circle=dev" id="_adpacks_js"></script>
          </div>
          </div>';
    //echo $display;

}

function social_share() { ?>
  <div id="social_share">
	<div  class="clearfix">
	<div id="share_me" data-url="<?php echo wp_get_shortlink(); ?>" data-text="Read: <?php the_title(); ?> @mikemattner"></div>
	</div>
  </div>
<?php
}

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
		    $html .= '<li><a href="http://www.mikemattner.com/tag/' . $tag->slug . '/">' . $tag->name . ' <em>' . $tag->count . '</em></a></li>';

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

    switch ($cat->cat_ID) {
        case 3: //Entry
            $icon = '<i class="fa fa-file-text"></i>';
            break;
        case 4: //Links
            $icon = '<i class="fa fa-dot-circle-o"></i>';
            break;
        case 5: //Quotes
            $icon = '<i class="fa fa-quote-left"></i>';
            break;
        case 557: //Images
            $icon = '<i class="fa fa-camera"></i>';
            break;
      }
            echo '<li><a href="'.$url.'/'.$cat_base.'/'.$cat->category_nicename.'/">'.$icon.' '.$cat->cat_name.'</span></a></li>'; //<span style="width: '.$tag_width.'%">

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

function time_ago( $type = 'post' ) {
	$d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';

	return human_time_diff($d('U'), current_time('timestamp')) . " " . __('ago');

}
    
function tweet($text) {
       $text = preg_replace('/([\.|\,|\:|\¡|\¿|\>|\{|\(]?)@{1}(\w*)([\.|\,|\:|\!|\?|\>|\}|\)]?)\s/i', "$1@<a href=\"http://twitter.com/$2\" class=\"tweet-username\">$2</a>$3 ", $text);
       $text = preg_replace('/([\.|\,|\:|\¡|\¿|\>|\{|\(]?)#{1}(\w*)([\.|\,|\:|\!|\?|\>|\}|\)]?)\s/i', "$1<a href=\"http://search.twitter.com/search?q=%23$2\" class=\"tweet-hashtag\">#$2</a>$3 ", $text);
       return $text;
} 

/**
* A pagination function
*/
function get_pagination(){
  // $paged - number of the current page
  global $paged, $wp_query;
  // How much pages do we have?
  if ( !$max_page ) {
    $max_page = $wp_query->max_num_pages;
  }
  if(!$paged){  
      $paged = 1;  
  } 
  if($max_page > 1){
     echo $paged.' of '.$max_page;
  } else {echo '&nbsp;';}
}

?>