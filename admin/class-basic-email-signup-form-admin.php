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

}