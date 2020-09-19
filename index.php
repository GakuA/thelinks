<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LINKS</title>
	</head>
	<body>
		hello
		<?php
			//画像のパス
			$image_path = "https://s.wordpress.com/mshots/v1/https://www.youtube.com?w=300&h=200";
			//$image_path = "https://image.itmedia.co.jp/images/logo/pcvheader_news.png";
			//保存するファイル名
			$file_name = 'test.jpg';
			while (!$image = file_get_contents($image_path.".jpg")) {
				echo "tryDL";
			}

			if ($image) {
				echo ($image);
			} else {
				echo ("false");
			}
			$save_path = "capture/".$file_name;
			while (!file_put_contents($save_path, $image)) {
				echo "tryUL";
			}
		?>
	</body>
</html>
