<?php
// Exit if accessed directly or not during uninstall
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Load WordPress DB object
global $wpdb;

// Define your table name — make sure it matches the one you created
$table_name = $wpdb->prefix . 'basisitesfemailSignupForm';

// Delete the custom table
$wpdb->query("DROP TABLE IF EXISTS {$table_name}");

// Delete plugin options
delete_option('basisitESF_email_boxtitle');
delete_option('basisitESF_email_textbox');
delete_option('basisitESF_email_signup');
delete_option('basisitESF_email_form_location');
delete_option('basisitESF_basis-color');


		