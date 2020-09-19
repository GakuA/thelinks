<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LINKS</title>
	</head>
	<body>
		hello
		<?php
		require_once( 'vendor/autoload.php' );
		use JonnyW\PhantomJs\Client;

		$client = Client::getInstance();

		$request  = $client->getMessageFactory()->createCaptureRequest('https://caloo.jp/hospitals/detail/2135017890');
var_dump($request);
		$response = $client->getMessageFactory()->createResponse();
		var_dump($response);

		// サイズ指定
		$width = 400;
		$height = 300;
		$request->setViewportSize($width, $height);

		// ファイルの保存先を指定する
		$file = 'capture/file.jpg';
		$request->setOutputFile($file);
		$client->send($request, $response);
		?>
	</body>
</html>
