<?php


/**
 * Implements theme_menu_tree().
 */
 
function opencharity_menu_tree($variables) {
  
 
   
    return '<ul class="nav navbar-nav">' . $variables['tree'] . '</ul>';
  
}

function opencharity_preprocess_html($variables) {
$viewport = array(
'#tag' => 'meta',
'#attributes' => array(
'name' => 'viewport',
'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
),
);
drupal_add_html_head($viewport, 'viewport');
}