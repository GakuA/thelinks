<?php
	$url = htmlspecialchars($_POST["postUrl"]);

	$link = pg_connect('host=ec2-54-146-4-66.compute-1.amazonaws.com dbname=d92g50uce9vjgl user=zkwliroqdgiofi password=e63c65c7f1f58c3c4a2f30b27e52d34a736e0e0cf6f76f9abee7f663948bc692');
	if (!$link) {
		die('接続失敗です。');
	}

	$result = pg_query("SELECT * FROM link");

	if(!$result){
		exit('SELECTクエリーが失敗しました。');
	}

	$alreadyFlg = false;
	while($row = pg_fetch_assoc($result)){
		if ($url == $row["url"]) {
			$alreadyFlg = true;
			break;
		}
	}

	pg_close($link);

	if ($alreadyFlg) {
		$list = array("title" => "@already@");
		echo json_encode($list);
		return;
	}



	$html = @file_get_contents($url);

	$count = 1;
	while ($count <= 3) {
		$count++;
		$title = title($html);
		if ($title) {
			break;
		}
	}

	$count = 1;
	while ($count <= 3) {
		$count++;
		$img = twitterImg($html);
		if ($img) {
			break;
		}
	}

	$list = array("title" => $title, "img" => $img);

	echo json_encode($list);

	function title($html) {
		if(preg_match("/<title.*?>(.*?)<\/title>/i", $html, $matches)){
			$cord = mb_detect_encoding($matches[1], "UTF-8, ASCII, JIS, EUC-JP, SJIS, SHIFT_JIS");
			if ($cord == "UTF-8") {
				return $matches[1];
			} else {
				return mb_convert_encoding($matches[1], "UTF-8", $cord);
			}
		} else {
			return false;
		}
	}

	function twitterImg($html) {
		if(preg_match('/<meta property="og:image" content="([^\"]+)/i', $html, $matches)){
			return $matches[1];
		} else {
			return "";
		}
	}
