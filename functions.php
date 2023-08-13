<?php 

// $version = wp_get_theme()->get( 'Version' ); //this dynamically gets the version of the style 

function applethemestyle_register_styles(){
    wp_enqueue_style('apple-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'applethemestyle_register_styles');



function applethemestyle_register_scripts(){
    wp_enqueue_script('apple-scripts' , 'main.js', array(), '1.0' , true);


}

add_action('wp_enqueue_scripts', 'applethemestyle_register_scripts');


// This allows Dynamic tag theme support
function apple_tag(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action ('after_setup_theme','apple_tag');



//Menu Options 
function apple_menus(){

    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);


}

add_action('init', 'apple_menus')


//

?>