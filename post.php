<?php
	$link = pg_connect('host=ec2-52-73-213-161.compute-1.amazonaws.com dbname=d6ehrn11a10an2 user=wfobbwokrzkgqt password=be23c6b07d6ef2162819f359b437c929c288edbb707c13034d9a38f9cd4425b0');
	if (!$link) {
		die('接続失敗です。');
	}

	$url = htmlspecialchars($_POST["urlAjax"]);
	$title = $_POST["titleAjax"];
	$date = $_POST["dateAjax"];
	$img = $_POST["imgAjax"];

	$sql = "INSERT INTO link(url, title, date, img) VALUES ('$url', '$title', '$date', '$img')";
	$result_flag = pg_query($sql);

	if (!$result_flag) {
		exit('INSERTクエリーが失敗しました。');
	}

	pg_close($link);
