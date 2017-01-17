<?php


/**
 * Implements theme_menu_tree().
 */
 
function opencharity_menu_tree($variables) {
  
 
   
    return '<ul class="nav navbar-nav">' . $variables['tree'] . '</ul>';
  
}