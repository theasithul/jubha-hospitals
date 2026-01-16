<?php 

// Plugin Name: Doctor Appointment 
// Description: A simple plugin to display custom text on your WordPress site.
// Version: 1.0.0
// Author: Mr stay boy
// License: ISO 9001 2008



if(!defined('ABSPATH')){
    exit;
};

    /**
     * SHORTCODE Function
     * 
     */

function book_appointment_shortcode(){
    return ' <div> you know me little go  </div> ';
}

    add_shortcode('book_appointment','book_appointment_shortcode');




    add_action('admin_menu', 'myplugin_add_admin_menu');

function myplugin_add_admin_menu() {
    add_menu_page(
        'Booking Appointment',
        'Booking Appointment',
        'manage_options',
        'my-plugin',
        'myplugin_page_content',
        'dashicons-editor-unlinkhdt',
        25
    );
}

function myplugin_page_content() {
    echo '<h1>My Plugin Page</h1>';
}
