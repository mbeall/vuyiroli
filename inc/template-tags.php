<?php
/**
 * Custom template tags for this theme.
 *
 * @package Flint
 * @sub-package Vuyiroli
 * @since 0.1
 */

remove_action('flint_entry_meta_above_steel_profile','steel_profile_entry_meta_above',10);
add_action('flint_entry_meta_above_steel_profile','vuyiroli_profile_entry_meta_above',10);
function vuyiroli_profile_entry_meta_above() {
  $lang     = steel_profile_meta( 'lang'    );
  $home     = steel_profile_meta( 'home'    );
  $ailments = steel_profile_meta( 'ailments');
  
  $output  = '';
  $output .= !empty($lang) | !empty($home) | !empty($ailments) ? '<p>' : '';
  $output .= !empty($lang) ? '<i class="glyphicon glyphicon-globe"></i> ' . $lang : '';
  $output .= !empty($lang) && !empty($home) ? '<br>' : '';
  $output .= !empty($home) ? '<i class="glyphicon glyphicon-home"></i> ' . $home : '';
  $output .= !empty($home) && !empty($ailments) ? '<br>' : '';
  $output .= !empty($ailments) ? '<i class="glyphicon glyphicon-heart"></i> ' . $ailments : '';
  $output .= !empty($lang) | !empty($home) | !empty($ailments) ? '<p>' : '';
  echo $output;
}