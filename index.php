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

		$client = Client::getInstance();

		$request  = $client->getMessageFactory()->createCaptureRequest('https://www.youtube.com/watch?v=CeVOKBEYebs');
		$response = $client->getMessageFactory()->createResponse();

		// ファイルの保存先を指定する
		$file = 'screenshots/file.jpg';

		$request->setOutputFile($file);
		$client->send($request, $response);
		echo("world2");
		?>
	</body>
</html>
