<?php
function my_enqueue_script(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','my_enqueue_script');