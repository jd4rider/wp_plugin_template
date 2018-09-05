<?php

/**
 * @package TestPlugin
 */

namespace Inc\Pages;


class Admin
{
    function __construct(){

    }

    function register(){
        add_action('admin_menu', array($this, 'add_admin_pages'));
    }

    public function add_admin_pages(){
        add_menu_page('Test Plugin', 'Test', 'manage_options', 'test_plugin', array($this, 'admin_index'), 'dashicons-store', 110);
    }

    public function admin_index(){
        require_once PLUGIN_PATH . 'templates/admin.php';
    }

}