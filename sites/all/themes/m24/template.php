<?php
function m24_preprocess_html(&$variables) {
  /* Add CSS
  drupal_add_css('http://fonts.googleapis.com/css?family=News+Cycle', array('type' => 'external'));
  // */
  /* Add JS Library 
  drupal_add_library('system', 'ui.autocomplete');
  // */
  /* Add JS */
  $options = array(
    'group' => JS_THEME,
  );
  drupal_add_js(
  	drupal_get_path('theme', 'example'). 'http://maps.googleapis.com/maps/api/js?sensor=true&key=AIzaSyCnWqNysl3l24-FNU6K1lJT3xnokc6-krY', 
  	$options
  );
}

function m24z_html_head_alter(&$head_elements) {
	//Elimina el meta generator
	unset($head_elements['system_meta_generator']);
}
?>