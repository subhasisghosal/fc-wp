<?php
/**
 * @package fc-wp
 * @version 0.1
 */
/*
Plugin Name: Fusioncharts For Wordpress
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is a plugin of FusionCharts for wordpress to add interactive javascript charts in your wordpress site's post or page
Author: Sahasrangshu Guha, Uttam Thapa
Version: 0.1
Author URI: https://github.com/sguha-work/, https://github.com/ukthapa/
*/
function checkPage() {
	$referPage = $_SERVER['PHP_SELF'];
	if(strpos($referPage,"post.php")!==false || strpos($referPage,"post-new.php")!==false) {
		return 1;
	}
	return 0;
}

function fcWpShowButton() {
	if(checkPage()) {
		echo "<a href='javascript:void(0)' id='fcwp_button'><img height='20' width='20' src='".plugins_url('assets/images/fc.png', __FILE__)."'>&nbsp;&nbsp;&nbsp;Create fusionchart for this Page/Post</a>";
	}
}
add_action( 'admin_notices', 'fcWpShowButton' );

function addButtonCss() {
	if(checkPage()) {
		echo "<link rel='stylesheet' href='".plugins_url('assets/css/button-style.css', __FILE__)."'/>";
		echo "<link rel='stylesheet' href='".plugins_url('assets/css/form-style.css', __FILE__)."'/>";
	}
}
add_action( 'admin_head', 'addButtonCss' );

function addJs() {
	if(checkPage()) {
		echo "<script type='text/javascript'>window.fcwp_main = {};fcwp_main.fcwp_pluginPath = '".plugins_url('assets/',__FILE__)."'.split('assets/')[0];</script>";
		echo "<script type='text/javascript' src=".plugins_url('assets/js/chart-types.js', __FILE__)."></script>";
		echo "<script type='text/javascript' src=".plugins_url('assets/js/form-function.js', __FILE__)."></script>";	
		echo "<script type='text/javascript' src=".plugins_url('assets/js/button-function.js', __FILE__)."></script>";
	}
}
add_action( 'admin_head', 'addJs' );

function addFormTemplate() {
	if(checkPage()) {
		echo "<script type='text/html' id='fcwp_formTemplate'>".file_get_contents(plugins_url('assets/html/form.html', __FILE__))."</script>";	
	}	
}
add_action( 'admin_head', 'addFormTemplate' );
?>