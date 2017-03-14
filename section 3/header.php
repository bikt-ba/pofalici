<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pofalici</title>
    <?php wp_head(); ?>
  </head>
  <?php

    if (is_front_page() ):
      $pofalici_classes = array ('pofalici-class', 'moja-klasa');
    else:
      $pofalici_classes = array ('no-pofalici-class');
    endif;

   ?>




  <body <?php body_class($pofalici_classes); ?>>

    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
