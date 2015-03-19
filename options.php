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

<style>
	.statvoo_container_1 {
		margin:25px 0;border-top:1px solid #ccc;border-bottom:1px solid #ccc;padding:50px 0;
	}
	.statvoo_view_left {
		float: left; display: block; cursor: pointer; border: 1px solid #ccc; padding: 5px; width: 35%; height: 80px;
	}
	.statvoo_register_right {
		float: left; display: block; cursor: pointer; border: 1px solid #ccc; padding: 5px; width: 35%; height: 80px;margin-left:10%;
	}
		.statvoo_view_left:hover, .statvoo_register_right:hover {
			border:1px solid #777;
			box-shadow:0 0 15px #aaa;
			background-color:#06c;
			color:#fff;
		}
			.statvoo_view_left:hover a, .statvoo_register_right:hover a, .statvoo_view_left:hover h2, .statvoo_register_right:hover h2 {
				color:#fff;
			}
</style>

<div class="statvoo_container_1">

	<div class="statvoo_view_left" onclick="var win=window.open('https://www.statvoo.com/website/<?=$domain;?>/overview', '_blank');win.focus();">
		<h2>View your stats!</h2>
		<div>View this site's statistics directly on <a href="https://www.statvoo.com/website/<?=$domain;?>/overview" target="_blank">Statvoo.com</a></div>
	</div>
	<div class="statvoo_register_right" onclick="var win=window.open('https://www.statvoo.com/join', '_blank');win.focus();">
		<h2>Get Started..</h2>
		<div>First time you're using Statvoo on this site? <a href="https://www.statvoo.com" target="_blank">Statvoo.com</a></div>
	</div>
	<br clear="all"/>

</div>

<p>Statvoo is active on this site, to deactivate it disable the Statvoo Wordpress <a href="plugins.php">plugin</a>.</p>

<input type="hidden" name="action" value="update" />

<?/*
<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>
*/?>

</form>
</div>

