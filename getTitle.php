<?php
	$url = htmlspecialchars($_POST["postUrl"]);

	$link = pg_connect('host=ec2-52-73-213-161.compute-1.amazonaws.com dbname=d6ehrn11a10an2 user=wfobbwokrzkgqt password=be23c6b07d6ef2162819f359b437c929c288edbb707c13034d9a38f9cd4425b0');
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
		if(preg_match('/<meta[^>]* property="og:image"[^>]* content="https?:([^\"]+)/i', $html, $matches)){
			return $matches[1];
		} else {
			return "";
		}
	}
