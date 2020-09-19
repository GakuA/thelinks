<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LINKS</title>
	</head>
	<body>
		hello
		<?php
		use \JonnyW\PhantomJs\Client;
		class ScreenShot{
		    private $client;
		    private $request;
		    private $response;
		    private $width;
		    private $height;
		    private $top;
		    private $left;
		    private $URL;
		    private $timeOut = 30000;
//echo("tyr1");
		    //画面サイズなどを決定する
		    function __construct($width, $height, $URL){
		        $this->width = $width;
		        $this->height = $height;
		        $this->top = 0;
		        $this->left = 0;
		        $this->URL = $URL;
		    }

		    //phantomjs実行クライアントを作成する
		    public function MakeClient(){
		        $this->client = Client::getInstance();
		        $this->client->isLazy(); //ページのレンダリング待ち
		        $this->client->getEngine()->setPath(__DIR__ . '/../bin/phantomjs');
		    }

		    //スクショリクエストの詳細を設定する
		    //ここでは、ブラウザサイズと同じ範囲を撮影範囲としている
		    public function MakeRequest($screenshotFileName){
		        $this->request = $this->client->getMessageFactory()->createCaptureRequest($this->URL, 'GET');
		        $this->request->setTimeout($this->timeOut); //強制的に終了するまでの時間
		        $this->request->setOutputFile($screenshotFileName); //スクショのファイル名
		        $this->request->setViewportSize($this->width, $this->height); //ブラウザサイズ
		        $this->request->setCaptureDimensions($this->width, $this->height, $this->top, $this->left); //撮影範囲
		    }

		    //リクエストのレスポンス（の受け皿）を作成する
		    public function MakeRespose(){
		        $this->response = $this->client->getMessageFactory()->createResponse();
		    }

		    //リクエストを送信する
		    public function SendRequset(){
		        $this->client->send($this->request, $this->response);
		    }

		    //
		    public function MakeImg($screenshotFileName){
				echo("try2");
		        $this->MakeClient();
		        $this->MakeRequest($screenshotFileName);
		        $this->MakeRespose();
		        $this->SendRequset();
		        //ファイルサイズ 0 byte = 画面取得できてないと判断
		        If(filesize($ssName) != 0){
		            return true;
		        }else{
		            return false;
		        }
		    }
		}


		//yahooのトップをブラウザの横幅を1000として撮影し、
		//screenshot.jpgというファイルに保存する。
		while (!$screenshot = new ScreenShot(1000, 750, 'https://www.youtube.com/watch?v=0FTTildpyt4')){
			echo("try");
		};
		$screenshot->MakeImg('capture/test.jpg');
		?>
	</body>
</html>
