<?php
define('ASSETS_URI', get_template_directory_uri() . "/assets/");

function adding_scripts_and_styles(){

  wp_enqueue_style('reset', ASSETS_URI . "css/reset.css", true);
  wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css", true);
  wp_enqueue_style('stylesheet', ASSETS_URI . "fonts/stylesheet.css", true);
  wp_enqueue_style('style', ASSETS_URI . "css/style.css", true);}

  if(!is_admin()){
    // wp_dequeue_script('jquery');
  // wp_enqueue_script('JQS', ASSETS_URI . "app/jquery-3.3.1.min.js", array(''), true);
  wp_enqueue_script('popper', "https://use.fontawesome.com/releases/v5.0.6/js/all.js", array('jscript'), true);
  wp_enqueue_script('bootstrapJs', ASSETS_URI . "app/bootstrap.min.js", array('jquery'), true);
}
add_action('init', 'adding_scripts_and_styles');

function disabling_admin_bar (){
  show_admin_bar( false );
}

add_action('init', 'disabling_admin_bar');


function adding_theme_supports() {
  add_theme_support('menus');
  add_theme_support('widgets');
  add_theme_support('custom-logo');
  add_theme_support('post-formats', array( 'image', 'video', 'audio', 'gallery', 'quote' ) );
}
add_action('init', 'adding_theme_supports');

if (function_exists('add_theme_support'))
{
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true);
    add_image_size('medium', 250, '', true);
    add_image_size('small', 120, '', true);
    add_image_size('custom-size', 700, 200, true);
    add_theme_support('automatic-feed-links');

    load_theme_textdomain('vcs-starter', get_template_directory() . '/languages');
}

function starter_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

function registering_nav_menus() {
  register_nav_menus(array(
    'top-menu' => __('This is the very top menu')
  ));
}
add_action('init', 'registering_nav_menus');
