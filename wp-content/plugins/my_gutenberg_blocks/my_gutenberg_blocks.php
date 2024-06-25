<?php
/** 
 * Plugin Name: My Gutenberg Blocks
 * Description: My plugin con bloques
 * Version: 1.0
 * Author: Jason Huertas
 */

 if(! defined('ABSPATH')){
    exit;
 }

 require_once plugin_dir_path(__FILE__) . 'includes/register-blocks.php';