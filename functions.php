<?php
/**
 * Flint functions and definitions
 *
 * @package Flint\Vuyiroli
 * @since Vuyiroli 0.1
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function vuyiroli_setup() {
  require( get_stylesheet_directory() . '/inc/template-tags.php' );
  add_image_size( 'front-slides', 840, 320, true);
}
add_action( 'after_setup_theme', 'vuyiroli_setup' );

/*
 * Create custom meta boxes
 */
add_action( 'add_meta_boxes', 'vuyiroli_asides_meta_boxes' );
function vuyiroli_asides_meta_boxes() {
  add_meta_box('vuyiroli_asides_meta', 'Asides', 'vuyiroli_asides_meta', 'post', 'side', 'high');
  add_meta_box('vuyiroli_asides_meta', 'Asides', 'vuyiroli_asides_meta', 'page', 'side', 'high');
}
function vuyiroli_asides_meta() { ?>
  
  <p><label>Left Aside</label><br /><textarea cols="25" name="left_aside"><?php echo vuyiroli_quote_meta ('left_aside'); ?></textarea></p>
  <p><label>Right Aside</label><br /><textarea cols="25" name="right_aside"><?php echo vuyiroli_quote_meta ('right_aside'); ?></textarea></p><?php
}

/*
 * Save data from meta boxes
 */
add_action('save_post', 'save_vuyiroli_quote');
function save_vuyiroli_quote() {
  global $post;
  if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE && (isset($post_id))) { return $post_id; }
  if(defined('DOING_AJAX') && DOING_AJAX && (isset($post_id))) { return $post_id; } //Prevents the metaboxes from being overwritten while quick editing.
  if(preg_match('/\edit\.php/', $_SERVER['REQUEST_URI']) && (isset($post_id))) { return $post_id; } //Detects if the save action is coming from a quick edit/batch edit.
  if (isset($_POST['right_aside'])) { update_post_meta($post->ID, "right_aside", $_POST["right_aside"]); }
  if (isset($_POST['left_aside'])) { update_post_meta($post->ID, "left_aside", $_POST["left_aside"]); }
}

/*
 * Display custom metadata
 */
function vuyiroli_quote_meta( $key, $post_id = NULL ) {
  global $post;
  $custom = $post_id == NULL ? get_post_custom($post->ID) : get_post_custom($post_id);
  $meta = !empty($custom[$key][0]) ? $custom[$key][0] : '';
  return $meta;
}

function sponsor_link() {
  echo '#';
}

add_action('steel_teams_add_meta','vuyiroli_add_teams_meta');
function vuyiroli_add_teams_meta() {
  echo '<p><label>Native Language</label><br /><input type="text"  size="25" name="profile_lang" value="' . steel_meta('profile','lang') . '" /></p>';
  echo '<p><label>Native Area</label><br /><input type="text"  size="25" name="profile_home" value="' . steel_meta('profile','home') . '" /></p>';
  echo '<p><label>Physical Ailments</label><br /><input type="text"  size="25" name="profile_ailments" value="' . steel_meta('profile','ailments') . '" /></p>';
}
add_action('steel_teams_save_meta','vuyiroli_save_teams_meta');
function vuyiroli_save_teams_meta() {
  global $post;
  if (isset($_POST['profile_lang'])) { update_post_meta($post->ID, "profile_lang", $_POST["profile_lang"]); }
  if (isset($_POST['profile_home'])) { update_post_meta($post->ID, "profile_home", $_POST["profile_home"]); }
  if (isset($_POST['profile_ailments'])) { update_post_meta($post->ID, "profile_ailments", $_POST["profile_ailments"]); }
}