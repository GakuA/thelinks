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
			return $matches[1];
		} else {
			return false;
		}
	}
	/*
	if(preg_match("/<title>(.*?)<\/title>/i", $html, $matches)){
		echo $matches[1];
	} else {
		return false;
	}
	*/
