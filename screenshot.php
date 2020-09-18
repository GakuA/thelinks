<? php
	require_once('vendor/autoload.php');

	use JonnyW\PhantomJs\Client;

	$client = Client::getInstance();

	$request = $client->getMessageFactory()->createCaptureRequest('http://www.key-p.com/');
	$resuponse = $client->getMessageFactory()->createResponse();

	// サイズ指定
	$width = 800;
	$height = 600;
	$request->setViewportSize($width, $height);

	// 保存先
	$file = 'screenshot/capture.jpg';

	$request->setOutputFile($file);
	$client->send($request, $response);

	if ($response->getStatus() === 200)
	{
	    echo $response->getContent();
	}
