<?php
/*
Plugin Name: BizzarTech Photobucket
Plugin URI: http://www.bizzartech.com/wp-plugins/
Description: Providing slideshows and thumbnail viewer functionality for Photobucket album rss feeds.
Version: 1.0
Author: Brad Derstine
Author URI: http://www.bizzartech.com/
*/
require("bizzartech_handlers.php");
add_shortcode("bizzar-photobucket-slideshow", "bizzar_photobucket_slideshow_handler");
add_shortcode("bizzar-photobucket-thumbnails", "bizzar_photobucket_thumbnails_handler");
?>