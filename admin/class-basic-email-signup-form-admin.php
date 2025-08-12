<?php

class Basic_Email_Signup_Form_Admin {

	private $plugin_name;
	private $version;


	public function __construct($plugin_name, $version) {

	$this->plugin_name = $plugin_name;
	$this->version = $version;
	

	}


	public function enqueue_styles() {
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( dirname( __FILE__ ) ) . 'includes/css/basic-email-signup-form-admin.css', array(), $this->version, 'all' );
		
	}


	public function menu() {
		add_menu_page( 'Basic Email Signup Form', 'Basic Email Signup Form', 'manage_options', 'basic-email-signup-form', array($this, 'get_overview'), 'dashicons-email', 25);
		add_submenu_page( 'basic-email-signup-form', 'Basic Email Signup Form - Overview', 'Overview', 'manage_options', 'basic-email-signup-form-overview', array($this, 'get_overview') );
		add_submenu_page( 'basic-email-signup-form', 'Basic Email Signup Form - Setting', 'Settings', 'manage_options', 'basic-email-signup-form-settings', array($this, 'get_settings') );

	}

	public function get_overview (){
		echo 'hello';
	}
	
	public function get_settings (){
		echo 'hello';
	}

}
