<?php

/**
 * Trigger this file on Plugin Uninstall
 * 
 * @package TestPlugin
 */

 defined('WP_UNINSTALL_PLUGIN') or die('This file cannot be accessed in this manner');

 //Clear Database Stored Data
 $books = get_posts( array('post_type' => 'book', 'numberposts' => -1 ));

 foreach($books as $book){
     wp_delete_post($book->ID, true);
 } 

