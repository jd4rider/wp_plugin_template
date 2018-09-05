<?php

/**
 * @package TestPlugin
 */

 /* 
 Plugin Name: Test Plugin
 Plugin URI: http://jfwebdesigns.altervista.org
 Description: This is a Test Plugin.
 Version: 1.0.0
 Author: Jonathan Forrider
 Author URI: http://jfwebdesigns.altervista.org
 License: GPLv3 or later
 Text Domain: test-plugin
 */

 /* 
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

defined('ABSPATH') or die('This file cannot be accessed in this manner');

if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

define('PLUGIN_PATH', plugin_dir_path(__FILE__));

if(class_exists('Inc\\Init')){
    Inc\Init::register_services();
}