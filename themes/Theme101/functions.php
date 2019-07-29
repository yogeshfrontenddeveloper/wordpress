
<?php
function mywebsite_data() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'my-custom-js', '/wp-content/themes/Theme101/js/main.js', true);
}
add_action( 'wp_enqueue_scripts', 'mywebsite_data' );

function title() {
    add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'title' );
?>


