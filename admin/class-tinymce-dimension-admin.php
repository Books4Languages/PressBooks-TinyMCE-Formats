<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://on-lingua.com
 * @since      0.1
 *
 * @package    TinyMCE_Formats
 * @subpackage TinyMCE_Formats/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    TinyMCE_Formats
 * @subpackage TinyMCE_Formats/admin
 * @author     julienCXX for My Language Skills <software@chmodplusx.eu>
 */
class TinyMCE_Formats_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.1
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.1
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    0.1
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in TinyMCE_Formats_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The TinyMCE_Formats_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/tinymce-formats-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    0.1
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in TinyMCE_Formats_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The TinyMCE_Formats_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/tinymce-formats-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Add the plugin's TinyMCE styles.
	 *
	 * @since    0.1
	 * @param    array $settings The currently active TinyMCE settings,
	 * including styles.
	 * @return   array The array from the input, with the added styles.
	 */
	public function add_mce_styles( $settings ) {

		/*
		 * To add a new format to the TinyMCE drop-down format list,
		 * just add it to the array below.
		 * You can see more examples in PressBooks plugin, in
		 * includes/class-pb-editor.php (get it at
		 * https://github.com/pressbooks/pressbooks)
		 * Information on parameters can be found at:
		 * http://www.tinymce.com/wiki.php/Configuration:formats
		 * section “Format parameters”.
		 */
		$style_formats = array(
			/*
			array(
				// Appears in the drop-down list
				'title' => 'Title',
				// Defines the HTML tag used to wrap elements
				// into
				// here, it is a block element, suited for
				// “paragraph”-wide formatting
				'block' => 'h1'
			),
			array(
				'title' => 'Green',
				// Defines the HTML tag used to wrap elements
				// into
				// Here, it is an inline element, suited for
				// “character”-wide formatting
				'inline' => 'span'
				// Defines the classe(s) the HTML tag used by
				// this format has to have
				// Useful for selecting it in CSS
				'classes' => 'green'
			),
			array(
				'title' => 'Green emphasis',
				'inline' => 'em'
				'classes' => 'green'
			),
			array(
				'title' => 'Superblock',
				'block' => 'div',
				// Classes are separated by spaces
				'classes' => 'box superblock',
				// Defines the HTML attributes other than
				// classes the tag used by this format has to
				// have
				'attributes' => array(
					'id' => 'sblock',
				),
				// Set this to true to define a format made of
				// an HTML block, wrapping other HTML block tags
				'wrapper' => 'false'
			),*/
			array( // from PressBooks
				'title' => 'Text box',
				'block' => 'div',
				'classes' => 'textbox',
				'wrapper' => false,
			),
			array(
				'title' => 'Form',
				'block' => 'div',
				'classes' => 'box',
				'attributes' => array(
					'id' => 'form',
					'title' => 'Form'
				),
				'wrapper' => 'false'
			),
			array(
				'title' => 'Use',
				'block' => 'div',
				'classes' => 'box',
				'attributes' => array(
					'id' => 'use',
					'title' => 'Use'
				),
				'wrapper' => 'false'
			),
			array(
				'title' => 'Exercise',
				'block' => 'div',
				'classes' => 'box',
				'attributes' => array(
					'id' => 'exercise',
					'title' => 'Exercise'
				),
				'wrapper' => 'false'
			)
		);
		$settings['style_formats'] = json_encode( $style_formats );

		if ( ! empty( $settings['content_css'] ) ) {
			$settings['content_css'] .= ',';
		}
		$settings['content_css'] .= plugin_dir_url( __FILE__ )
			. '../public/css/tinymce-formats-public.css';

		return $settings;

	}

}
