<?php
/**
 *
 *
 *
 */

/**
 *
 *
 */
function gw_menu($menu = array(), $current = null) {
	$html = "";
	foreach($menu as $item => $options) {
		$link = isset($options["link"]) ? $options["link"] : $item;
		$label = isset($option["label"]) ? $options["label"] : ucfirst($item);
		$liopt = array();
		if ($link == $current) {
			$liopt["class"] = "current";
		}
		$html .= content_tag("li", link_to($label, "site/" . $link), $liopt);
	}
	return content_tag("ul", $html, array("class" => "lavaLampWithImage", "id" => "lava_menu"));
}

function gw_sidebar($items = array()) {
	$html = "";
	foreach($items as $item) {
		$html .= gl_sidebar_item($item);
	}
	return content_tag("div", $html, array("class" => "sidebar"));
}

function gw_sidebar_item($item = array()) {
	$html = "";
	$html .= content_tag("h2", _get_option($item, "title"));
	$html .= content_tag("h4", _get_option($item, "date"));
	$html .= content_tag("p", _get_option($item, "content"));
	$html .= content_tag("div", content_tag("a", "Read more", array("href" => "#")), array("class" => "button_small"));
	return $html;
}

function gw_team($team = array()) {
	$html = "";
	$index = 0;
	foreach ($team as $member) {
		$html .= content_tag("h3", $member["name"]);
		$html .= tag("br");
		$html .= content_tag("div", image_tag($member["image"], array("width" => "180", "height" => "180")), array("style" => "float: " . ($index % 2 ? "right" : "left") . "; width: 200px;"));
		$html .= content_tag("div", content_tag("p", $member["content"]), array("style" => "float: " . ($index % 2 ? "left" : "right") . "; width: 400px;"));
		$html .= tag("br", array("style" => "clear: both;"));
		$index++;
	}
	return $html;
}
