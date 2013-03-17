<?php
/**
 * Roots includes
 */
$load = true;
$requreonce = true;

locate_template('/lib/utils.php', $load, $requreonce);           // Utility functions
locate_template('/lib/init.php', $load, $requreonce);            // Initial theme setup and constants
locate_template('/lib/sidebar.php', $load, $requreonce);         // Sidebar class
locate_template('/lib/config.php', $load, $requreonce);          // Configuration
locate_template('/lib/activation.php', $load, $requreonce);      // Theme activation
locate_template('/lib/cleanup.php', $load, $requreonce);         // Cleanup
locate_template('/lib/nav.php', $load, $requreonce);             // Custom nav modifications
locate_template('/lib/comments.php', $load, $requreonce);        // Custom comments modifications
locate_template('/lib/rewrites.php', $load, $requreonce);        // URL rewriting for assets
locate_template('/lib/htaccess.php', $load, $requreonce);        // HTML5 Boilerplate .htaccess
locate_template('/lib/widgets.php', $load, $requreonce);         // Sidebars and widgets
locate_template('/lib/scripts.php', $load, $requreonce);         // Scripts and stylesheets
locate_template('/lib/custom.php', $load, $requreonce);          // Custom functions
