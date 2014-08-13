<?php

/**
 * @file
 * template.php
 */
 
function new_ops_preprocess_html(&$variables) {
  /**
   * Add default icon
   */
  $apple_icon =  array(

    '#tag' => 'link',
    '#attributes' => array(
      'href' => drupal_get_path('theme',$GLOBALS['theme']),'/apple-touch-icon.png',
      'rel' => 'apple-touch-icon-precomposed',
    ),
  );

  /**
   * Loop through to add various sizes
   */
  $apple_icon_sizes = array(76,120,152);

  foreach($apple_icon_sizes as $size){
    $apple = array(
      '#tag' => 'link',
      '#attributes' => array(
        'href' => drupal_get_path('theme',$GLOBALS['theme']).'/apple-touch-icon-'.$size.'px.png',
        //'href' => path_to_theme().'/apple-touch-icon-'.$size.'px.png',
        'rel' => 'apple-touch-icon-precomposed',
        'sizes' => $size . 'x' . $size,
      ),
    );
    drupal_add_html_head($apple, 'apple-touch-icon-'.$size);
  }
}
