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

		while (!$request  = $client->getMessageFactory()->createCaptureRequest('https://google.com')) {}
		while (!$response = $client->getMessageFactory()->createResponse()) {}

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
		$client->send($request, $response);
		?>
	</body>
</html>
