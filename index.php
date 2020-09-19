<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LINKS</title>
	</head>
	<body>
		hello
		<!--
		<img src="https://s.wordpress.com/mshots/v1/https://m.youtube.com/watch?v=0FTTildpyt4?w=400&h=300">
		-->
		<?php
		/*
		$url = "https://s.wordpress.com/mshots/v1/https://m.youtube.com/watch?v=0FTTildpyt4";
		//$url = "https://pbs.twimg.com/profile_banners/42566884/1526165516/1500x500";
		//while (!$img = file_get_contents($url, true)) {}
		//$img = file($url);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		while (!$img = curl_exec($ch)) {}
		var_dump($img);
		$img_name = "capture/file.jpg";

		//画像を保存
		file_put_contents($img_name, $img);
		*/

		require_once('vendor/autoload.php');
		use JonnyW\PhantomJs\Client;

		$client = Client::getInstance();

		$request = $client->getMessageFactory()->createCaptureRequest();

		$request->setUrl('https://news.yahoo.co.jp/articles/a2de6eda5d92f1529e8e0ff5c9dcb8ddc4d4e0fe');
		var_dump($request);
		// サイズ指定
		$width = 400;
		$height = 300;
		$request->setViewportSize($width, $height);

		$dim_width = 400;
		$dim_height = 300;
		$top = 0;
		$left = 0;

		$request->setCaptureDimensions($dim_width, $dim_height, $top, $left);

		// ファイルの保存先を指定する
		$file = 'capture/file.jpg';

		$request->setOutputFile($file);
		$response = $client->getMessageFactory()->createResponse();
		$client->send($request, $response);

		?>
	</body>
</html>
