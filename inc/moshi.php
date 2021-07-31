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

function get_category_image($categories) {
    if (in_array(0, $categories)) {
        echo get_template_directory_uri() . "/img/news/news-big.png";
    } elseif (in_array(1, $categories)) {
        echo get_template_directory_uri() . "/img/news/transfer-big.png";
    } elseif (in_array(2, $categories)) {
        echo get_template_directory_uri() . "/img/news/partners-big.png";
    }
}