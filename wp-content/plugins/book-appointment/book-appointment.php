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
    echo '<h1>wtf</h1>';
}


add_action('admin_menu', 'book_doctor_admin_menu');

function book_doctor_admin_menu() {

    // Main menu
    add_menu_page(
        'Booking Doctor',
        'Booking Doctor',
        'manage_options',
        'book-doctor',
        'book_doctor_page',
        'dashicons-calendar-alt',
        5
    );

    // Submenu: Add Doctor
    add_submenu_page(
        'book-doctor',           // Parent slug
        'Add Doctor',            // Page title
        'Add Doctor',            // Submenu title
        'manage_options',        // Capability
        'book-doctor-add',       // Submenu slug
        'book_doctor_add_page'   // Callback function
    );


       // Submenu: Add Doctor
    add_submenu_page(
        'book-doctor',           // Parent slug
        'Patient',            // Page title
        'Patient',            // Submenu title
        'manage_options',        // Capability
        'booking-doctor-add',       // Submenu slug
        'booking_doctor_add_page'   // Callback function
    );

    // Submenu: Appointment Booking
    add_submenu_page(
        'book-doctor',                    // Parent slug
        'Appointment Booking',            // Page title
        'Appointment Booking',            // Submenu title
        'manage_options',                 // Capability
        'book-doctor-appointment',        // Submenu slug
        'appointment_booking_system_page' // Callback function
    );
}

// Main page
function book_doctor_page() {
    echo '<div class="wrap"><h1> Book Doctor Settings</h1><p>Main page content here.</p></div>';
}

// Add Doctor page
function book_doctor_add_page() {
    echo '<div class="wrap"><h1> Add Doctor</h1><p>Here you can add new doctors.</p></div>';
}

// Add Doctor page
function booking_doctor_add_page() {
    echo '<div class="wrap"><h1> Add Doctor</h1><p>Here you can add new doctors.</p></div>';
}

// Appointment Booking page
function appointment_booking_system_page() {
    echo '<div class="wrap"><h1>A ppointment Booking System</h1><p>Here you can set up appointment booking.</p></div>';
}


