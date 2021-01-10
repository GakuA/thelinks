<?php
	$link = pg_connect('host=ec2-54-146-4-66.compute-1.amazonaws.com dbname=d92g50uce9vjgl user=zkwliroqdgiofi password=e63c65c7f1f58c3c4a2f30b27e52d34a736e0e0cf6f76f9abee7f663948bc692');
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
