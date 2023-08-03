<?php
/*
 * Plugin Name: Diable Admin Bar
 * Description: My first custom plugin which can be used to diable the admin bar in wordpress
 */

 // remove the admin bar from the front end
 add_filter('show_admin_bar', '__return_false');