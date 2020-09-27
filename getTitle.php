<?php
	$html = @file_get_contents($_POST["postUrl"]);

	if(preg_match("/<title>(.*?)<\/title>/i", $html, $matches)){
		echo $matches[1];
	} else {
		return false;
	}
