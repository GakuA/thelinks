<?php
	$html = @file_get_contents($_POST["postUrl"]);

	$count = 1;
	while (!$title=title() || $count <= 3) {
		$count++;
	}
	echo $title;

	function title() {
		if(preg_match("/<title>(.*?)<\/title>/i", $html, $matches)){
			return $matches[1];
		} else {
			return false;
		}
	}
