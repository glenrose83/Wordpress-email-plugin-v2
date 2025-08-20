<?php
	
/*
Plugin Name: Basic Email Signup Form
Description: A email signup form that lets you collect emails and grow an email newsletter list. This is a great way to get free advertising.
Author: Glen Rose @ 42sales
Author URI: https://42sales.com/
Version: 1.0.0
Requires PHP: 7.0
Requires at least: 4.7
License: GPLv2 or later
Text Domain: basic-email-signup-form
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/*
 When activated this code runs
 
function activate_basic_email_signup_form() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-basic-email-signup-form-activator.php';
	Basic_Email_Form_Activator::activate();
}

function deactivate_basic_email_signup_form() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-basic-email-signup-form-deactivator.php';
	Basic_Email_Form_Deactivator::deactivate();
}

//This is the hooks for activation and deactivation
//register_activation_hook( __FILE__, 'activate_basic_email_signup_form' );
//register_deactivation_hook( __FILE__, 'deactivate_basic_email_signup_form' );
*/

/**
 * This class is used for internationalization, admin hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-basic-email-signup-form.php';


//The function that runs it all
function run_basic_email_signup_form() {

	$plugin = new Basic_Email_Signup_Form();
	$plugin->run();

}
run_basic_email_signup_form();
