<?php
/**
 * Roots includes
 */
$load = true; //If true, the child template file will be loaded if it is found.
$requreonce = true; 

locate_template('/lib/utils.php',		$load, $requreonce); // Utility functions
locate_template('/lib/init.php', 		$load, $requreonce); // Initial theme setup and constants
locate_template('/lib/wrapper.php', 	$load, $requreonce); // Theme wrapper class
locate_template('/lib/sidebar.php', 	$load, $requreonce); // Sidebar class
locate_template('/lib/config.php', 		$load, $requreonce); // Configuration
locate_template('/lib/activation.php', 	$load, $requreonce); // Theme activation
locate_template('/lib/titles.php', 		$load, $requreonce); // Page titles
locate_template('/lib/cleanup.php', 	$load, $requreonce); // Cleanup
locate_template('/lib/nav.php', 		$load, $requreonce); // Custom nav modifications
locate_template('/lib/gallery.php', 	$load, $requreonce); // Custom [gallery] modifications
locate_template('/lib/comments.php', 	$load, $requreonce); // Custom comments modifications
locate_template('/lib/rewrites.php', 	$load, $requreonce); // URL rewriting for assets
locate_template('/lib/relative-urls.php',$load, $requreonce); // Root relative URLs
locate_template('/lib/widgets.php', 	$load, $requreonce); // Sidebars and widgets
locate_template('/lib/scripts.php', 	$load, $requreonce); // Scripts and stylesheets
locate_template('/lib/custom.php', 		$load, $requreonce); // Custom functions
