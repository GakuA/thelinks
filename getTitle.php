<?php
	$html = @file_get_contents($_POST["postUrl"]);

	$count = 1;
	while (/*!$title = */title($html) || $count <= 3) {
		$count++;
	}
	echo title($html);

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
