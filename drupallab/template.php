<?php

/**
 * Override or insert variables into the node template.
 *
 * @param $variables
 */
function drupallab_preprocess_node(&$variables) {
  $variables['creation_date'] = NULL;
  if ($variables['node']->created) {
    $variables['creation_date'] = format_date($variables['node']->created, 'custom', 'j M Y, H:i');
  }
  $variables['author_name'] = $variables['name'];
}
