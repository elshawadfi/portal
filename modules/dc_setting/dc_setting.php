<?php

/**
 * Ensures that the module init file can't be accessed directly, only within the application.
 */
defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Datac Module
Description: Sample module description.
Version: 1.0.
Requires at least: 2.3.*
*/


hooks()->add_action('clients_init', 'my_new_name_for_admin_login');

function my_new_name_for_admin_login()
{   
    // Item for all clients
    add_theme_menu_item('unique-item-id', [
            'name'     => 'staff',
            'href'     => site_url('admin'),
            'position' => 100,
        ]);


}



