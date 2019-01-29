<!DOCTYPE html>
<html lang="uk">

<head>
  <meta charset="UTF-8">
  <title>
    <?php echo wp_get_document_title(); ?>
  </title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
  <?php wp_head();?>
</head>

<body>
  <div class="wrapper">
    <header>
      <?php
        if (has_nav_menu('header-menu')){ 
            wp_nav_menu([
              'theme_location' => 'header-menu',
              'container'=>'nav',
              'container_id'=> '',
              'container_class' => 'navigation',
              'menu_id' => 'manu-item',
              'menu_class' => 'item-nav',
              'items_wrap' => '<ul id="%1$s__a">%3$s</ul>',
              'depth' => 2
            ]); 
          }
        ?>
    </header>
