<?php
if(!is_single()){
    if(!get_post_format()) {
        get_template_part('partials/regular', 'entry');
    } else {
        get_template_part('partials/regular', get_post_format());
    }
} else {
    if(!get_post_format()) {
        get_template_part('partials/regular', 'entry');
    } else {
        get_template_part('partials/regular', get_post_format());
    }
}
?>