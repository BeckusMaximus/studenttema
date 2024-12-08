<?php 

function my_new_theme_style(){
  $sub_path = '/assets/css/';
  $path_to_style = get_template_directory_uri() . $sub_path;
  $style_version = filemtime(get_template_directory() . $sub_path . 'main-style.css');

  wp_enqueue_style(
    'mynewtheme-main-style',
    $path_to_style . 'main-style.css',
    array(),
    $style_version,
    'all'
  );

}

add_action('wp_enqueue_scripts', 'my_new_theme_style');

function my_new_theme_js(){
  $sub_path = '/assets/js/';
  $path_to_style = get_template_directory_uri() . $sub_path;
  $style_version = filemtime(get_template_directory() . $sub_path . 'main.js');

  wp_enqueue_script(
    "mynewtheme-script",
    $path_to_style . 'main.js',
    array(),
    $style_version,
    true
  );
}

add_action('wp_enqueue_script', 'my_new_theme_js');

/* Google fonts */
function add_font() {
  $font_script = <<<'EOD'
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
EOD;
  echo $font_script;
}
add_action('wp_head', 'add_font');

/* Thumbnail size */
add_theme_support('post-thumbnails');
add_image_size('small-thumb', 150, 150, true);
add_image_size('medium-thumb', 750, 750, false);
add_image_size('large-thumb', 1024, 1024, false);

if (has_post_thumbnail()) {
  the_post_thumbnail('medium', [
  'loading' => 'lazy'
  ]);
  }
  

/* Header navigation */
function register_menus() {
  register_nav_menus([
  'header-menu' => __('Header Menu')
  ]);
  }
  add_action('init', 'register_menus');


/* Widget sidebar */
function my_theme_register_sidebar()
{
register_sidebar(array(
'name' => 'Sidebar widget',
'id' => 'sidebar-widget',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
));
}
add_action('widgets_init', 'my_theme_register_sidebar');

/* Removes deadspace on top of website */
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

/* Excerpt length shown */
function mytheme_custom_excerpt_length( $length ) {
  return 30;
  }
  add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


