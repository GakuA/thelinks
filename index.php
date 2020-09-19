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

		while !($request  = $client->getMessageFactory()->createCaptureRequest('https://caloo.jp/hospitals/detail/2135017890')){};
		$response = $client->getMessageFactory()->createResponse();

		// サイズ指定
		$width = 800;
		$height = 600;
		$request->setViewportSize($width, $height);

		// ファイルの保存先を指定する
		$file = 'capture/file.jpg';
		$request->setOutputFile($file);
		$client->send($request, $response);
		?>
	</body>
</html>
