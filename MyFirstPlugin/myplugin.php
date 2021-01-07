<?php
/*
Plugin Name: My First plugin
Plugin URI: https://yourwebsiteurl.com
Description: This is my first WordPress Plugin
Author: Trần B Văn
Author URI: https://yourwebsiteurl.com
License:     GPL2 etc
License URI: https://yourwebsiteurl.com
Version: 1.0
*/
/* Copyright YEAR PLUGIN_AUTHOR_NAME (email : your email address)
(Plugin Name) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
(Plugin Name) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with (Plugin Name). If not, see (http://link to your plugin license).
*/

function display_hello_world_page()
{
	echo 'Hello World!';
}
function hello_world_admin_menu()
{
	add_menu_page(
		'Hello World', // page title
		'Hello World', // menu title
		'manage_options', // capability
		'hello-world', // menu slug
		'display_hello_world_page' // callback function
	);
}
add_action('admin_menu', 'hello_world_admin_menu');
