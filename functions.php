<?php

function histotainment_files() {
  wp_enqueue_style('histotainment_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'histotainment_files');
