<?php

defined('ABSPATH') || die();

class AdsBbpressAdmin {
    public function __construct() {
        add_action('admin_menu', array($this, 'hook_admin_menu'));
    }
    
    function hook_admin_menu() {
        add_options_page('Ads for bbPRess', 'Ads for bbPRess', 'manage_options', 'ads-bbpress/index.php');
    }
    
}
new AdsBbpressAdmin();
