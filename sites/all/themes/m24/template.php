<?php
function m24_preprocess_html(&$variables) {
  /* Add CSS
  drupal_add_css('http://fonts.googleapis.com/css?family=News+Cycle', array('type' => 'external'));
  // */
  /* Add JS Library 
  drupal_add_library('system', 'ui.autocomplete');
  // */
}

function m24z_html_head_alter(&$head_elements) {
	//Elimina el meta generator
	unset($head_elements['system_meta_generator']);
}
?>