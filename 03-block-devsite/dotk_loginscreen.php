<?php
/**
 * @package DOTK_LoginScreen
 * @version 1.0
 */
/*
Plugin Name: DOTK LoginScreen
Plugin URI: https://www.durkotheek.nl
Description: when you develop a site and want visitors to keep out
Author: ing. Dirk Hornstra
Version: 1.0
Author URI: https://www.durkotheek.nl/
*/

add_action( 'wp_loaded','dotk_show_loginscreen_validation' );

function dotk_show_loginscreen_validation() 
{
	// WHEN WE ARE NOT IN THE ADMIN-PART
	$thispage = strtolower($_SERVER["PHP_SELF"]);
	$wploginpage = (intval(strpos($thispage, "wp-login")) > 0);
	$wpadminpage = (intval(strpos($thispage, "wp-admin")) > 0);

	if ((!$wploginpage) && (!$wpadminpage))
	{
		if (!is_user_logged_in())
		{
			header("HTTP/1.0 418 I'm A Teapot");
			exit;
		}
	}
}
?>
