<?php   
namespace App;

function corvanders_supports(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 50, 50);
}
add_action('after_setup_theme', 'App\corvanders');

function corvanders_register_assets(){
   
    wp_register_style('materialize','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css');
}

add_action('after_setup_theme','App\corvanders_supports');
add_action('wp_enqueue_scripts','corvanders_register_assets');
add_action('wp_enqueue_style','corvanders_register_assets');
add_action('after_setup_theme','App\corvanders');

function post_thumbnail(){
    add_image_size( 'single-post-thumbnail', 590, 180 );
}