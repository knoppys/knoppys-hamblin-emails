<?php
/*
Plugin Name:       Knoppys Hamblin Emails
Plugin URI:        https://github.com/knoppys/greenfield-emails
Description:       This plugin controls the email templates that are sent out to candidates and Hamblin Staff. The emails are branded and responsive. 
Version:           4.7
Author:            Knoppys Digital Limited
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/knoppys/greenfield-emails
GitHub Branch:     master
*/

/***************************
*Load Native & Custom wordpress functionality plugin files. 
****************************/
foreach ( glob( dirname( __FILE__ ) . '*.php' ) as $root ) {
    require $root;
}

foreach ( glob( dirname( __FILE__ ) . '/functions/*.php' ) as $root ) {
    require $root;
}

foreach ( glob( dirname( __FILE__ ) . '/templates/*.php' ) as $root ) {
    require $root;
}
