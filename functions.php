<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );



function remove_google_fonts() {
    wp_dequeue_style('ashe-kalam-font');
    wp_dequeue_style ('ashe-playfair-font');
    wp_dequeue_style ('ashe-opensans-font');
 }
add_action ( 'wp_enqueue_scripts' , 'remove_google_fonts' , 100 );



function set_cache_headers() {
    $expires = 60 * 60 * 24 * 7; // 1 semaine
    header("Pragma: public");
    header("Cache-Control: max-age=" . $expires);
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $expires) . ' GMT');
}
add_action('init', 'set_cache_headers');






 