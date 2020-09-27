<?php
	$html = @file_get_contents($_POST["postUrl"]);

	if(preg_match("/<title>(.*?)<\/title>/i", $html, $matches)){
		return $matches[1];
	} else {
		return false;
	}
