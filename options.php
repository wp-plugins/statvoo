<?
$urlparts = parse_url(site_url());
$domain = str_replace("www.", "", $urlparts ["host"]);
?>

<div class="wrap">
<h2>Statvoo.com</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<?php settings_fields('statvoo'); ?>

<p><b>Statvoo is used by thousands of websites to monitor traffic and interact with visitors in realtime.</b></p>

<p>Statvoo is active on this site, to deactivate it disable the Statvoo Wordpress <a href="plugins.php">plugin</a>.</p>
<p><a href="http://www.statvoo.com/auth/login" target="_blank">Login</a> to Statvoo now or <a href="http://www.statvoo.com/auth/register" target="_blank">register</a> for a new account.</p>
<p>You can view this domain's statistics <a href="http://www.statvoo.com/view/<?=$domain;?>/overview/realtime" target="_blank">here</a>.</p>

<input type="hidden" name="action" value="update" />

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

</form>
</div>
