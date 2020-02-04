<?php
/**
 * TinyMCE formats for PressBooks
 *
 * This file is read by WordPress to generate a dropdown menu in the editor TinyMCE.
 *
 * Dictionary of words with same meanings used across:
 *  tffp == tinymce_formats_for_pressbooks
 *
 * !!! Simple Anchors Headers plugin is required. !!!
 *
 * @link              https://github.com/my-language-skills/tinymce-formats-for-pressbooks
 * @since             2.0
 * @package           tinymce-formats-for-pressbooks
 *
 * @wordpress-plugin
 * Plugin Name:       TinyMCE formats for PressBooks
 * Plugin URI:        https://github.com/my-language-skills/tinymce-formats-for-pressbooks
 * Description:       Generates dropdown menu with a print function.
 * Version:           2.0
 * Author:            My Language Skills team
 * Author URI:        https://github.com/my-language-skills/
 * License:           GPL 3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       tinymce-formats-for-pressbooks
 */


 include_once plugin_dir_path( __FILE__ ) . "tffp-unused-buttoms.php";

 /**
  *  Remove the h1 (1=h1), h2 (2=h2) and Preformatted (Preformatted=pre) tag from the WordPress editor.
  *
  *  @since 2.0
  *  @param   array  $settings  The array of editor settings
  *  @return  array             The modified edit settings
  */

 function my_format_TinyMCE( $in ) {
         $in['block_formats'] = "Paragraph=p; Heading 3=h3; Heading 4=h4; Heading 5=h5; Heading 6=h6";
     return $in;
 }
 add_filter( 'tiny_mce_before_init', 'my_format_TinyMCE' );


/**
* Hooks your function into the correct filters
*
* @since 2.0
*
*/
function tffp_add_mce_button() {

  //check user permissions
  if ( !current_user_can( 'edit_posts' ) &&  !current_user_can( 'edit_pages' ) ) {
    return;
  }

  //check if WYSIWYG is enabled
  if ( 'true' == get_user_option( 'rich_editing' ) ) {
    add_filter( 'mce_external_plugins', 'tffp_add_tinymce_plugin' );
    add_filter( 'mce_buttons_2', 'tffp_register_mce_button' );
  }
}

//initiate add_mce_button
add_action('admin_head', 'tffp_add_mce_button');

/**
* Register new button in the editor
*
* @since 2.0
*
*/
function tffp_register_mce_button( $buttons ) {
  array_push( $buttons, 'wdm_mce_button' );
  return $buttons;
}

/**
* Declare a script for the new button
* the script will insert the shortcode on the click event
*
* @since 2.0
*
*/
function tffp_add_tinymce_plugin( $plugin_array ) {
  $plugin_array['wdm_mce_button'] = plugins_url('/js/tffp-mce-button.js',__FILE__);
  return $plugin_array;
}

/**
* Function used to call the editor.css file that modify the editor back-end
*
* @since 2.0
*
*/
function tffp_plugin_mce_css( $mce_css ) {
  if ( ! empty( $mce_css ) )
    $mce_css .= ',';
  $mce_css .= plugins_url( '/css/editor.css', __FILE__ );
  return $mce_css;
}

//initiate plugin_mce_css function
add_filter( 'mce_css', 'tffp_plugin_mce_css' );
