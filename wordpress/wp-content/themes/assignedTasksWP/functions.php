<?php 
function notesPlatform() {
    wp_enqueue_style('notesPlatform_main-style', get_theme_file_uri('/styles/css/main.min.css'));
  }
  
  add_action('wp_enqueue_scripts', 'notesPlatform');
?>