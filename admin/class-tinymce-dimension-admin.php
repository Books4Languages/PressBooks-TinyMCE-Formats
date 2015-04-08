<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://on-lingua.com
 * @since      0.1
 *
 * @package    TinyMCE_Dimension
 * @subpackage TinyMCE_Dimension/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    TinyMCE_Dimension
 * @subpackage TinyMCE_Dimension/admin
 * @author     julienCXX for My Language Skills <software@chmodplusx.eu>
 */
class TinyMCE_Dimension_Admin {

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
		 * defined in TinyMCE_Dimension_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The TinyMCE_Dimension_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/tinymce-dimension-admin.css', array(), $this->version, 'all' );

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
		 * defined in TinyMCE_Dimension_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The TinyMCE_Dimension_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/tinymce-dimension-admin.js', array( 'jquery' ), $this->version, false );

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

		$style_formats = array(
			array(
				'title' => 'Title',
				'block' => 'h1'
			),
			array(
				'title' => 'Subtitle 1',
				'block' => 'h2'
			),
			array(
				'title' => 'Subtitle 2',
				'block' => 'h3'
			),
			array(
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
			. '../public/css/tinymce-dimension-public.css';

		return $settings;

	}

}
