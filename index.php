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
		echo("world");
		use JonnyW\PhantomJs\Client;

		echo("world2");
		$client = Client::getInstance();

		echo("world3");
		$request  = $client->getMessageFactory()->createCaptureRequest('https://www.youtube.com/watch?v=CeVOKBEYebs');
		echo("world4");
		$response = $client->getMessageFactory()->createResponse();
		echo("world5");

		// ファイルの保存先を指定する
		$file = 'cupture/file.jpg';
var_dump($request);
		$request->setOutputFile($file);
		echo("world6");
		$client->send($request, $response);
		echo("world7");
		?>
	</body>
</html>
