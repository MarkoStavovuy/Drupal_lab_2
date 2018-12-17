<?php

/**
 * @file
 * This file contain hooks.
 */

/**
 * Implements hook_library().
 */
function drupallab_library() {
  // Registers Ziehharmonika library.
  $libraries['ziehharmonika'] = [
    'title' => 'Ziehharmonika',
    'website' => 'https://github.com/Arcwise/ziehharmonika',
    'version' => '1.0',
    'js' => [
      'sites/all/libraries/ziehharmonika/ziehharmonika.js' => [],
    ],
    'css' => [
      'sites/all/libraries/ziehharmonika/ziehharmonika.css' => [],
    ],
  ];
  return $libraries;
}

/**
 * Implements hook_preprocess_views_view().
 */
function drupallab_preprocess_views_view(&$variables) {
  // Attach the library and custom JS and CSS files to the page "FAQ".
  if ($variables['name'] == 'faq') {
    drupal_add_library('drupallab', 'ziehharmonika');
    drupal_add_js('sites/all/themes/drupallab/js/script.js', [
      'group' => JS_THEME,
    ]);
    drupal_add_css('sites/all/themes/drupallab/css/accordion.css', [
      'group' => CSS_THEME,
    ]);
  }
}
