<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LINKS</title>
	</head>
	<body>
		hello
		<?php
		require_once './vendor/autoload.php';

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverDimension;

//ヘッドレスモードで起動
$options = new ChromeOptions();
$options->addArguments(['--headless']);
$capabilities = DesiredCapabilities::chrome();
$capabilities->setCapability(ChromeOptions::CAPABILITY, $options);
$driver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);

//繰り返しの処理を入れたければここから
$url = "https://www.yahoo.co.jp/";
$imageName = "capture.file";
$driver->get($url);

// 一旦 ウィンドウサイズを任意に指定
// 縦幅は調整してくれるが、
// 横幅はここの値が引き継がれてるみたい？
$dimension = new WebDriverDimension(1920, 1080); // width, height
$driver->manage()->window()->setSize($dimension);

// 実際のコンテンツサイズを取得して調整
$contentWidth = $driver->executeScript("return Math.max(document.body.scrollWidth, document.body.offsetWidth, document.documentElement.clientWidth, document.documentElement.scrollWidth, document.documentElement.offsetWidth);");
$contentHeight = $driver->executeScript("return Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);");
$dimension_content = new WebDriverDimension($contentWidth, $contentHeight);
$driver->manage()->window()->setSize($dimension_content);

$file = __DIR__ . $imageName . ".jpg";
$driver->takeScreenshot($file);

$driver->close();
		?>
	</body>
</html>
