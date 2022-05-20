<?php

/*
Plugin Name: Oo Block Ctrl
Description: Plugin for disabling Gutenberg blocks and registering or unregistering block styles and variations
Version: 1.0.3
Author: Oskari Oksanen
Author URI: https://oskarioksanen.fi
Text Domain: oobc
*/


function oobc_scripts() {
	wp_enqueue_script( 
		'oobc-scripts', 
		plugins_url( 'oo-block-ctrl.js', __FILE__ ), 
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ), 
		filemtime( plugin_dir_path( __FILE__ ) . 'oo-block-ctrl.js' )
	);
}
add_action( 'enqueue_block_editor_assets', 'oobc_scripts' );
