<?php
/*
Plugin Name: zipaddr_jp_tada
Plugin URI: http://zipaddr.com/wordpress/
Description: The input convert an address from a zip code automatically.
Version: 1.0.1
Author: Tatsuro, Terunuma
Author URI: http://pierre-soft.com/
*/
define('ZipAddr_VERSION', '1.0.1');

function zipaddr_jp_tada_change($output){
	if( strstr($output,'zip') == false ) {return $output;}
$pn = explode('/', plugin_basename(__FILE__));
$plugin_name = $pn[0];
$cm = 'zipaddr';
$ul = 'https://'.$cm.'.googlecode.com/svn/trunk/'.$plugin_name.".js";
$js = '<script src="'. $ul .'" charset="UTF-8"></script>';
$ky = '<form';
	return str_ireplace($ky, $js.$ky, $output);
}

add_filter( 'the_content', 'zipaddr_jp_tada_change', 99999);
?>
