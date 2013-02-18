<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php include_http_metas() ?>
		<?php include_metas() ?>
		<?php include_title() ?>
		<link rel="shortcut icon" href="/favicon.ico" />
		<?php include_stylesheets() ?>
		<?php include_javascripts() ?>
		<script type="text/javascript">
			$(function() {
				$("#lava_menu").lavaLamp({
					fx: "backout",
					speed: 700
				});
			});
		</script>
	</head>
	<body>
		<div id="main">
			<div id="header">
				<div id="menubar">
					<?php include_component("site", "menu") ?>
					<?php include_component("site", "link") ?>
				</div>
			</div>

			<div class="container_header"><p>&nbsp;</p></div>
			<div id="banner">
				<div id="banner_content">
					<?php echo image_tag(sfConfig::get("app_site_banner", "banner"), array("width" => "870", "height" => "350")) ?>
				</div>
			</div>
			<div id="site_content">
				<div id="content">
					<div class="content_item">
						<?php echo $sf_data->getRaw('sf_content') ?>
					</div>
					<div class="sidebar_container">
						<?php include_component("site", "sidebar") ?>
					</div><!--close sidebar_container-->
					<br style="clear:both;" />
				</div>
			</div>
			<div id="footer">
				<div id="footer_content">
					<?php include_component("site", "footer") ?>
				</div>
			</div>
		</div>
		<div class="container_footer">&nbsp;</div>
		<p style="float: left;padding: 0;">&nbsp;</p>
	</body>
</html>
