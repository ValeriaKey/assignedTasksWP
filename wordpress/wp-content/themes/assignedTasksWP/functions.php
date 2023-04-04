<?php 
function notesPlatform() {
    wp_enqueue_style('assignedTasks_main-style', get_theme_file_uri('/styles/css/main.min.css'));
  }
  
  add_action('wp_enqueue_scripts', 'notesPlatform');

function loginPageStyle() {
  wp_enqueue_style('assignedTasks_login-style', get_theme_file_uri('/styles/css/login.min.css'));
}
add_action('login_enqueue_scripts', 'loginPageStyle');

function redirectUsers() {
  $currentUser = wp_get_current_user();

  if(count($currentUser->roles) == 1 AND $currentUser->roles[0] == 'subscriber') { 
    wp_redirect(site_url('/tasks'));
    exit;
  }
}
add_action('admin_init', 'redirectUsers');
?>