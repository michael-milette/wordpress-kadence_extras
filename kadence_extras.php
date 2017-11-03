<?php
/*
Plugin Name: Extras for WordPress Kadense Themes
Plugin URI: http://tngconsulting.ca
Description: Hiding main search field and adding search in mobile menu when in mobile view.
Version: 0.1.0
Author: TNG Consulting Inc. (Michael Milette)
Author URI: http://www.tngconsulting.ca/

Copyright 2017 TNG Consulting Inc.

This script is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This script is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

function kadence_extras_load(){
  wp_enqueue_style( 'kadence_extras', plugin_dir_url( __FILE__ ) . '/style.css', false, '0.1', 'all' );
  wp_enqueue_script( 'kadence_extras', plugin_dir_url( __FILE__ ) . '/script.js', array( 'jquery' ), '0.1', true );
}
add_action( 'wp_enqueue_scripts', 'kadence_extras_load' );
