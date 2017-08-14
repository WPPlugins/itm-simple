<?php

/*
Plugin Name: ITM SIMPLE HIDE
Plugin URI: http://aprendesap.com
Description: A simple plugin that uses jQuery to hide parts of text
Author: Ignasi Tort
Author URI: http://aprendesap.com
Version: 2.0
License: GNU 
*/

/*  Copyright 2013  Ignasi Tort  (email : ignasitort@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


    function wptuts_scripts_load_cdn()  
    {  
        // Deregister the included library  
        wp_deregister_script( 'jquery' );  // Comment this line if you not use Google's CDN 
          
        // Register the library again from Google's CDN  // Comment this line if you not use Google's CDN 
        wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', array(), null, false );  
          
        // Register the script like this for a plugin:  
        wp_register_script( 'custom-script', plugins_url( '/itm-simple.min.js', __FILE__ ), array( 'jquery' ) ); 
        
		wp_register_script( 'itm_paypal_script', plugins_url( '/itm_paypal_script.js', __FILE__ ), array( 'jquery' ) ); // paypal
      
        // For either a plugin or a theme, you can then enqueue the script: 
        wp_enqueue_script( 'custom-script' ); 
		wp_enqueue_script( 'itm_paypal_script');   // paypal
    } 
    add_action( 'wp_enqueue_scripts', 'wptuts_scripts_load_cdn' );  



    function wptuts_styles_with_the_lot()  
    {  
        // Register the style like this for a plugin:  
        wp_register_style( 'custom-style', plugins_url( '/itm-simple.min.css', __FILE__ ), array(), '20120208', 'all' );  
        // or  
      
        // For either a plugin or a theme, you can then enqueue the style:  
        wp_enqueue_style( 'custom-style' );  
    }  
    add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot' );  








?>