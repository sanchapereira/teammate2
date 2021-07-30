<?php

function the_post_summary($length = 128, $string = "") {
    if ($string) {
        $content = $string;
    } else {
        $content = wp_strip_all_tags( get_the_content() );
    }

    if (strlen($content) > $length) {
        $content = substr($content, 0, $length) . '...';
    }

    echo $content;
}

// function moshi_enqueue_scripts() {
//     wp_enqueue_style( 'scroll-top-css', get_stylesheet_directory_uri(  ) . '/css/material-scrolltop.css');
//     wp_enqueue_script( 'scroll-top-js', get_template_directory_uri(  ) . '/js/material-scrolltop.js', array(), '1.0.0', true);
// }

// add_action( 'wp_enqueue_scripts', 'moshi_enqueue_scripts' );