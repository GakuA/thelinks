<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="keywords" content="リンク,宣伝,面白い,暇つぶし,見つける">
		<meta name="description" content="ただリンクを貼るだけのサイトです。リンクを貼るもよし、貼ってあるリンクを見るもよし">

		<link rel="stylesheet" href="css/style.css" type="text/css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/load.js"></script>
		<script src="js/function.js"></script>

		<script data-ad-client="ca-pub-3505153643581987" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

		<title>Links - ただリンクを貼るだけのサイト</title>
	</head>
	<body>
		<div id="logo">
			<img src="img/logo.png">
		</div>
		<div id="menu">
			<div class="bar">
				<div class="button">
					<a href="/">HOME</a>
				</div>
				<div class="button">
					LINK
				</div>
			</div>
		</div>
		<div id="post">
			<input id="url" type="text" placeholder="URLを入力">
			<input id="postBtn" type="button" value="リンクを貼る">
		</div>
		<div id="links">
		</div>


		<div id="modal">
			<svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-default" style="
"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(0 50 50) translate(0 -30)">  <animate attributeName="opacity" from="1" to="0" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect><rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(30 50 50) translate(0 -30)">  <animate attributeName="opacity" from="1" to="0" dur="1s" begin="0.08333333333333333s" repeatCount="indefinite"></animate></rect><rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(60 50 50) translate(0 -30)">  <animate attributeName="opacity" from="1" to="0" dur="1s" begin="0.16666666666666666s" repeatCount="indefinite"></animate></rect><rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(90 50 50) translate(0 -30)">  <animate attributeName="opacity" from="1" to="0" dur="1s" begin="0.25s" repeatCount="indefinite"></animate></rect><rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(120 50 50) translate(0 -30)">  <animate attributeName="opacity" from="1" to="0" dur="1s" begin="0.3333333333333333s" repeatCount="indefinite"></animate></rect><rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(150 50 50) translate(0 -30)">  <animate attributeName="opacity" from="1" to="0" dur="1s" begin="0.4166666666666667s" repeatCount="indefinite"></animate></rect><rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(180 50 50) translate(0 -30)">  <animate attributeName="opacity" from="1" to="0" dur="1s" begin="0.5s" repeatCount="indefinite"></animate></rect><rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(210 50 50) translate(0 -30)">  <animate attributeName="opacity" from="1" to="0" dur="1s" begin="0.5833333333333334s" repeatCount="indefinite"></animate></rect><rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(240 50 50) translate(0 -30)">  <animate attributeName="opacity" from="1" to="0" dur="1s" begin="0.6666666666666666s" repeatCount="indefinite"></animate></rect><rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(270 50 50) translate(0 -30)">  <animate attributeName="opacity" from="1" to="0" dur="1s" begin="0.75s" repeatCount="indefinite"></animate></rect><rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(300 50 50) translate(0 -30)">  <animate attributeName="opacity" from="1" to="0" dur="1s" begin="0.8333333333333334s" repeatCount="indefinite"></animate></rect><rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(330 50 50) translate(0 -30)">  <animate attributeName="opacity" from="1" to="0" dur="1s" begin="0.9166666666666666s" repeatCount="indefinite"></animate></rect></svg>
		</div>


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
