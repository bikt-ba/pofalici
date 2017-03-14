<?php

function pofalici_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/pofalici.css', array(), '1.0.0', 'all');
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/pofalici.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'pofalici_script_enqueue');