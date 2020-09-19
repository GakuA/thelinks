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
			//保存するファイル名
			$file_name = 'test';

			$image = file_get_contents($image_path);
			$save_path = "capture/".$file_name;
			while (!file_put_contents($save_path, $image)) {
				echo "try";
			};
		?>
	</body>
</html>
