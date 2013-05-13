<?php
/*
Plugin Name: Statvoo.com for Wordpress
Plugin URI: http://wordpress.org/extend/plugins/statvoo/
Description: Enables <a href="http://www.statvoo.com/">Statvoo.com</a> on all pages.
Version: 1.0.0
Author: Andrew Odendaal
Author URI: http://www.statvoo.com/
*/

if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');



function admin_init_statvoo() {
  register_setting('statvoo', 'is_enabled');
}

function admin_menu_statvoo() {
  add_options_page('Statvoo.com', 'Statvoo.com', 'manage_options', 'statvoo', 'options_page_statvoo');
}

function options_page_statvoo() {
  include(WP_PLUGIN_DIR.'/statvoo/options.php');  
}

function statvoo() {
?>
<script type="text/javascript">
	(function(){
		var sac = document.createElement('script');
		sac.src = 'http://static.statvoo.com/js/statvoo-min.js';
		sac.type = 'text/javascript';
		sac.async = true;
		var sasc = document.getElementsByTagName('script')[0];
		sasc.parentNode.insertBefore(sac, sasc);
	})();
</script>
<?php
}


if (is_admin()) {
  add_action('admin_init', 'admin_init_statvoo');
  add_action('admin_menu', 'admin_menu_statvoo');
}

if (!is_admin()) {
  add_action('wp_head', 'statvoo');
}

?>
