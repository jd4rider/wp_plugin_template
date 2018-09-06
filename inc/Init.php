<?php

/**
 * @package TestPlugin
 */

namespace Inc;

final class Init
{
    /** 
     * Store all the classes inside an array
     * @return array Full list of classes
     */
    public static function get_services()
    {
        return [
            Pages\Admin::class,
            Base\Enqueue::class
        ];
    }

    /**
     * Loop through the classes, initialize them,
     * and call the register() method if it exists
     *
     * @return void
     */
    public static function register_services()
    {
        foreach(self::get_services() as $class){
            $service = self::instantiate($class);
            if(method_exists($service, 'register')){
                $service->register();
            }
        }
    }

    /**
     * Initialize the class
     * @param class $class class from the services array
     *
     * @return class instance
     */
    private static function instantiate($class){
        return new $class();
    }
}
/* 
use Inc\Activate;
use Inc\Deactivate;

if (!class_exists('TestPlugin')){

    class TestPlugin 
    {   
        public $plugin;

        function __construct(){
            $this->plugin = plugin_basename(__FILE__);
        }

        function register(){
            add_action('admin_enqueue_scripts', array( $this, 'enqueue'));

            add_action('admin_menu', array($this, 'add_admin_pages'));

            add_filter("plugin_action_links_$this->plugin", array( $this, 'settings_link'));
        }

        public function settings_link($links){
            $settings_link = '<a href="admin.php?page=test_plugin">Settings</a>';
            array_push($links, $settings_link);
            return $links;
        }

        public function add_admin_pages(){
            add_menu_page('Test Plugin', 'Test', 'manage_options', 'test_plugin', array($this, 'admin_index'), 'dashicons-store', 110);
        }

        public function admin_index(){
            require_once plugin_dir_path(__FILE__) . 'templates/admin.php';
        }

        protected function create_post_type(){
            add_action('init', array($this, 'custom_post_type'));
        }
        
        function custom_post_type() {
            register_post_type( 'book', ['public' => true, 'label' => 'Books']);
        }

        function enqueue(){
            // enqueue all our scripts
            wp_enqueue_style( 'mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__ ));
            wp_enqueue_script( 'mypluginscript', plugins_url('/assets/myscript.js', __FILE__ ));
        }

        function activate(){
            Activate::activate();
        }

    }


    $testPlugin = new TestPlugin();
    $testPlugin->register();


    //activation  
    register_activation_hook( __FILE__, array( $testPlugin, 'activate'));

    //deactivation
    register_deactivation_hook( __FILE__, array( 'Deactivate', 'deactivate'));

} */