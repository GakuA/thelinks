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
			//$image_path = "https://s.wordpress.com/mshots/v1/https://www.youtube.com?w=300&h=200";
			$image_path = "https://docodoor.co.jp/2017/wp-content/uploads/2020/07/FireShot-Capture-357-%E9%9B%91%E6%9C%A8%E3%81%AE%E5%BA%AD%E3%81%AA%E3%82%89-%E4%BD%9C%E5%BA%AD%E5%B9%B3%E5%B2%A1-%E6%AD%A6%E8%94%B5%E9%87%8E%E3%83%BB%E4%B8%89%E9%B7%B9%E3%83%BB%E4%B8%96%E7%94%B0%E8%B0%B7%E3%82%92%E4%B8%AD%E5%BF%83%E3%81%AB%E9%9B%91%E6%9C%A8%E3%81%AE%E5%BA%AD%E3%81%A4%E3%82%99%E3%81%8F%E3%82%8A%E3%82%92%E3%81%93%E3%82%99%E6%8F%90%E6%A1%88-sakutei-hiraoka.com_-300x192.jpg";
			//保存するファイル名
			$file_name = 'test.jpg';
			$save_path = "capture/".$file_name;
			while (!$image = file_get_contents($image_path)) {
				echo "tryDL";
			}

			if ($image) {
				echo ($image);
			} else {
				echo ("false");
			}
			while (!file_put_contents($save_path, $image)) {
				echo "tryUL";
			}
		?>
	</body>
</html>
