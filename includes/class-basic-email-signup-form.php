<?php

class Basic_Email_Signup_Form {

    
    protected $loader;

    public function __construct() {
        
        $this->plugin_name = 'Basic Email Signup Form';
        $this->version = '1.0.0';

        $this->load_dependencies();
        $this->define_admin_hooks();
        $this->define_public_hooks();
        
    }

    public function load_dependencies(){
    		
		//Class with all actions to the admin area.		
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-basic-email-signup-form-admin.php';

        //Class that contains the loader	
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-basic-email-signup-form-loader.php';

        $this->loader = new Basic_Email_Form_Signup_Loader();

        }




    /* Register all hooks related to the admin area */
    private function define_public_hooks() {

        // Register our method as a content filter
        add_filter('the_content', array($this, 'msp_add_custom_message'));
    }

    
    private function define_admin_hooks() {

        // Register our method as a content filter        
        $plugin_admin = new Basic_Email_Signup_Form_Admin($this->get_plugin_name(), $this->get_version());
        $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
        $this->loader->add_action( 'admin_menu', $plugin_admin, 'menu' );

    }

    // This is the method called by the filter
    public function msp_add_custom_message($content) {
        if (is_single() && is_main_query()) { 
            $content .= '<p style="color:blue; font-weight:bold;">Thank you for reading this post!</p>';
        }
        return $content;
    }

    // HTML for the admin page
    public function admin_page_html() {
        // Make sure only users with permission can see it
        if (!current_user_can('manage_options')) {
            return;
        }
        ?>
        <div class="wrap">
            <h1>Basis Email Signup Form</h1>
            <p>Welcome to the Email Signup Form settings page.</p>
            <p>Here you can configure your form options (coming soon!).</p>

            alnfahfaiojdfajofi
        </div>
        <?php
    }

    //Getter for the plugin name
    public function get_plugin_name() {
		return $this->plugin_name;
	}

    //Getter for the plugin name
    public function get_version() {
		return $this->version;
	}

    //The function that runs it all
    public function run() {
		$this->loader->run();
	}


}
