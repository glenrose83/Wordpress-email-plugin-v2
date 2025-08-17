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
		add_submenu_page( 'basic-email-signup-form', 'Overview', 'Overview', 'manage_options', 'basic-email-signup-form', array($this, 'get_overview') );
		add_submenu_page( 'basic-email-signup-form', 'Create a form', 'Create a form', 'manage_options', 'basic-email-signup-form-create-a-form', array($this, 'get_create_a_form') );
		add_submenu_page( 'basic-email-signup-form', 'Subscribers', 'Subscribers', 'manage_options', 'basic-email-signup-form-subscribers', array($this, 'get_subscribers') );
		add_submenu_page( 'basic-email-signup-form', 'Lists', 'Lists', 'manage_options', 'basic-email-signup-form-Lists', array($this, 'get_lists') );
		add_submenu_page( 'basic-email-signup-form', 'Send a email', 'Send a email', 'manage_options', 'basic-email-signup-form-send-a-email', array($this, 'get_send_a_email') );
		add_submenu_page( 'basic-email-signup-form', 'Automations', 'Automations', 'manage_options', 'basic-email-signup-form-automations', array($this, 'get_automations') );
		add_submenu_page( 'basic-email-signup-form', 'Statistics', 'Statistics', 'manage_options', 'basic-email-signup-form-statistics', array($this, 'get_statistics') );
		add_submenu_page( 'basic-email-signup-form', 'Settings', 'Settings', 'manage_options', 'basic-email-signup-form-settings', array($this, 'get_settings') );
		add_submenu_page( 'basic-email-signup-form', 'Help', 'Help', 'manage_options', 'basic-email-signup-form-help', array($this, 'get_help') );

	}

	public function get_overview (){
		echo 'get_overview';
	}
	
	public function get_create_a_form (){

		echo "
		<div class='flex_container_white'>
			<div class='page_title'>Create a form</div>
			<div class='box-container'>
				<div class='options'><img src='" . plugin_dir_url( dirname( __FILE__ ) ) . "assets/images/pop-up-option.svg' alt='Pop-up option'></div>
				<div class='options_button'><button class='button button-primary button-medium'>Create a form on pages</button></div>
			</div>
		</div>

		<div class='flex_container_white'>
			<div class='page_title'>Existing forms</div>
			<div class='container_table_forms'>
				<table>
					<thead>
						<tr>
							<th class='col-25'>Name</th>
							<th class='col-25'>List</th>
							<th class='col-25'>Type</th>
							<th class='col-15'>Activated</th>
							<th class='col-10'>Edit</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Data 1</td>
							<td>Data 2</td>
							<td>Data 3</td>
							<td>Data 4</td>
							<td>Data 5</td>
						</tr>
					</tbody>
				</table>
				
			</div>


		</div>
		
		";

	}

	public function get_subscribers (){
		echo 'get_subscribers';
	}

		public function get_lists (){
		echo 'get_lists';
	}

		public function get_send_a_email (){
		echo 'get_send_a_email';
	}

		public function get_automations (){
		echo 'get_automations';
	}

		public function get_statistics (){
		echo 'get_statistics';
	}

		public function get_settings (){
		echo 'get_settings';
	}

		public function get_help (){
		echo 'get_help';
	}

}
