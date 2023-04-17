<?php 
function notesPlatform() {
    wp_enqueue_style('assignedTasks_main-style', get_theme_file_uri('/styles/css/main.min.css'));
    wp_enqueue_script( 'assignedTasks_main-script', get_template_directory_uri() . '/js/script.js', array(), false, true );
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

 // Note Post Type
 register_post_type('(note', array(
  'capability_type' => 'note',
  'map_meta_cap' => true,
  'supports' => array('title', 'editor', 'excerpt'),
  'public' => false, 
  'show_in_rest' => true, 
  'show_ui' => true,
  'labels' => array(
    'name' => 'Notes', 
    'add_new_item' => "Add New Note",
    'edit_item' => "Edit Note",
    'all_items' => "All Notes",
    'singular_name' => 'Note',
    'add_new' => 'Add New Note',
    'taxonomies' => array('category')
  ),
  'menu_icon' => 'dashicons-welcome-write-blog'
)); 
?>