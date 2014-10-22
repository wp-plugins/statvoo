<?php

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
  add_dashboard_page('Statvoo.com', 'Statvoo', 'manage_options', 'statvoo', 'options_page_statvoo');
}

function admin_menu_bar_statvoo() {
  global $wp_admin_bar;
  $wp_admin_bar->add_menu( array(
        'id' => "statvoo",
        'title' => __( 'Statvoo', 'statvoo.com' ),
        'href' => admin_url( 'index.php?page=statvoo')
    ) );
}


function options_page_statvoo() {
  include(WP_PLUGIN_DIR.'/statvoo/options.php');
}

function statvoo() {
?>
    <script type="text/javascript"> (function(){ var s = document.createElement('script'); s.src = document.location.protocol+'//static.statvoo.com/js/statvoo-min.js'; s.type = 'text/javascript'; s.async = true; var t = document.getElementsByTagName('script')[0]; t.parentNode.insertBefore(s, t); })(); </script>
<?php
}


if (is_admin()) {
  add_action('admin_init', 'admin_init_statvoo');
  add_action('admin_menu', 'admin_menu_statvoo');
  add_action('admin_bar_menu', 'admin_menu_bar_statvoo', 200);
}

if (!is_admin()) {
  add_action('wp_head', 'statvoo');
}

?>
