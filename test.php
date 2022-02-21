<?php
	if　(isset($_GET['url'])) {
		$url = $_GET['url'];
	}

	if(preg_match("/<title.*?>(.*?)<\/title>/i", $url, $matches)){
		$cord = mb_detect_encoding($matches[1], "UTF-8, ASCII, JIS, EUC-JP, SJIS, SHIFT_JIS");
		if ($cord == "UTF-8") {
			echo $matches[1];
		} else {
			echo mb_convert_encoding($matches[1], "UTF-8", $cord);
		}
	} else {
		return false;
	}
