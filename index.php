<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<title>LINKS</title>
	</head>
	<body>
		<div>
			<img id="logo" src="img/logo.png">
		</div>
		hello
		<img src="https://s.wordpress.com/mshots/v1/https://www.youtube.com/watch?v=pJkMTYvZu0w?w=400&h=300">
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

		/*
		require_once('vendor/autoload.php');
		use JonnyW\PhantomJs\Client;

		$client = Client::getInstance();

		$request = $client->getMessageFactory()->createCaptureRequest();
		$request->setTimeout(5000);
		$request->setUrl('https://headlines.yahoo.co.jp/hl?a=20200919-00000169-dal-ent');
		var_dump($request);
		// サイズ指定
		$width = 800;
		$height = 600;
		$request->setViewportSize($width, $height);

		$dim_width = 800;
		$dim_height = 600;
		$top = 0;
		$left = 0;

		$request->setCaptureDimensions($dim_width, $dim_height, $top, $left);

		// ファイルの保存先を指定する
		$file = 'capture/file.jpg';

		$request->setOutputFile($file);
		$response = $client->getMessageFactory()->createResponse();
		while (!$response->getStatus()) {
			$client->send($request, $response);
		}
		var_dump($client);
		*/
		?>
		<!--
		<script>
			//casperオブジェクトを生成
			var casper = require('casper').create();

			//指定のURLへ遷移する
			casper.start('http://www.yahoo.co.jp', function() {
				//画面のキャプチャを取得
				this.capture('capture/file.jpg');
			});

			//処理の実行
			casper.run();
		</script>
		-->
	</body>
</html>
