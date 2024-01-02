<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles_and_scripts');

function theme_enqueue_styles_and_scripts() {
    // Chargement du fichier CSS de Swiper depuis le CDN
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');

    // Chargement du fichier JavaScript de Swiper depuis le CDN
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '9', true);

    // Chargement du fichier CSS de AOS depuis le CDN
    wp_enqueue_style('aos-css', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', array(), '2.3.4');
    
    // Chargement du fichier JavaScript de AOS depuis le CDN
    wp_enqueue_script('aos-js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array('jquery'), '2.3.4', true);
    
    // Chargement du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Chargement du fichier script.js avec jQuery
    wp_enqueue_script('custom-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);

}



// Get customizer options from parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}








