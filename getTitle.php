<?php
	$html = @file_get_contents($_POST["postUrl"]);

	$count = 1;
	while ($count <= 3) {
		$count++;
		$title = title($html);
		if ($title) {
			break;
		}
	}
	echo $title;

	function title($html) {
		if(preg_match("/<title>(.*?)<\/title>/i", $html, $matches)){
			return mb_convert_encoding($matches[1], "UTF-8", mb_detect_encoding($matches[1]));
		} else {
			return false;
		}
	}
