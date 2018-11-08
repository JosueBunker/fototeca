?php
function wl_styles(){
wp_enqueue_style('main-style', get_template_directory_uri() . '/css/app.css');
wp_enqueue_style('responsive-style', get_template_directory_uri() . '/css/media-query.css');
 
}
add_action('wp_enqueue_scripts', 'wl_styles');