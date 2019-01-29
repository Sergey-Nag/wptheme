<?php

add_action('after_setup_theme', function () {
    
  register_nav_menus([
    'header-menu' => 'Верхняя область',
    'footer-menu' => 'Нижняя область',
  ]);
  
});

function my_scripts(){
  wp_enqueue_script('jquery'); 
  wp_enqueue_script( 'script-one', get_template_directory_uri() . '/js/script.js', array(), null, true );
}

add_action('wp_enqueue_scripts', 'my_scripts');
?>
