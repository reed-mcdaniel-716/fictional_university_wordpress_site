<?php 

  function college_files() {
    // load css
    wp_enqueue_style('college_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('college_extra_styles', get_theme_file_uri('/build/-index.css'));
  }

  // add_action is a hook
  // this adds college_files as a callback function to the wp_enqueue_scripts action; accurs when wp_head() is called
  add_action('wp_enqueue_scripts', 'college_files');

?>