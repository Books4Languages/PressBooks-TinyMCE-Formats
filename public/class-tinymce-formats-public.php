<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://on-lingua.com
 * @since      0.1
 *
 * @package    TinyMCE_Formats
 * @subpackage TinyMCE_Formats/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    TinyMCE_Formats
 * @subpackage TinyMCE_Formats/public
 * @author     julienCXX for My Language Skills <software@chmodplusx.eu>
 */
class TinyMCE_Formats_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/tinymce-formats-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/tinymce-formats-public.js', array( 'jquery' ), $this->version, false );
                
                
	/**
	 * Add restriction levels to the boxes.
	 *
	 * @since    0.6
	 *
	 */
                
         /**
		 * Restrict Elements
		 */  
//                if ( \Pressbooks\Book::isBook() && is_single()) { 
//               
//       /**
//		 *  Introduction 
//		 */     
//                if( !rcp_is_active() ){ //hiding information
//                wp_enqueue_script( $this->plugin_name.'2', plugin_dir_url( __FILE__ ) . 'js/tinymce-formats-restrict-introduction.js', array( 'jquery' ), $this->version, false );
//                }
//                     
//       /**
//		 * Form 
//		 */     
//                if( !rcp_is_active() ){ //hiding information
//                wp_enqueue_script( $this->plugin_name.'3', plugin_dir_url( __FILE__ ) . 'js/tinymce-formats-restrict-form.js', array( 'jquery' ), $this->version, false );
//                }
//       /**
//		 *  Example 
//		 */     
//                if( !rcp_is_active() ){ //hiding information
//                wp_enqueue_script( $this->plugin_name.'4', plugin_dir_url( __FILE__ ) . 'js/tinymce-formats-restrict-example.js', array( 'jquery' ), $this->version, false );
//                }
//                
//       /**
//		 * Use
//		 */     
//                if( !rcp_is_active() ){ //hiding information
//                wp_enqueue_script( $this->plugin_name.'5', plugin_dir_url( __FILE__ ) . 'js/tinymce-formats-restrict-use.js', array( 'jquery' ), $this->version, false );
//                }
//    
//       /**
//		 *   Extension 
//		 */     
//                if( !rcp_is_active() ){ //hiding information
//                wp_enqueue_script( $this->plugin_name.'6', plugin_dir_url( __FILE__ ) . 'js/tinymce-formats-restrict- extension.js', array( 'jquery' ), $this->version, false );
//                }            
//                
//       /**
//		 *  Exercise 
//		 */     
//                if( !rcp_is_active() ){ //hiding information
//                wp_enqueue_script( $this->plugin_name.'7', plugin_dir_url( __FILE__ ) . 'js/tinymce-formats-restrict-exercise.js', array( 'jquery' ), $this->version, false );
//                }
//                
//       /**
//		 *   Activity 
//		 */     
//                if( !rcp_is_active() ){ //hiding information
//                wp_enqueue_script( $this->plugin_name.'8', plugin_dir_url( __FILE__ ) . 'js/tinymce-formats-restrict- activity.js', array( 'jquery' ), $this->version, false );
//                }
//                
//       /**
//		 *   Task 
//		 */     
//                if( !rcp_is_active() ){ //hiding information
//                wp_enqueue_script( $this->plugin_name.'9', plugin_dir_url( __FILE__ ) . 'js/tinymce-formats-restrict- task.js', array( 'jquery' ), $this->version, false );
//                }
//               
//                
//                }
	}

}
