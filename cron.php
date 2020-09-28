<?php
	$link = pg_connect('host=ec2-54-146-4-66.compute-1.amazonaws.com dbname=d92g50uce9vjgl user=zkwliroqdgiofi password=e63c65c7f1f58c3c4a2f30b27e52d34a736e0e0cf6f76f9abee7f663948bc692');
	if (!$link) {
		die('接続失敗です。');
	}

	$result = pg_query("SELECT * FROM link order by date");

	if(!$result){
		exit('SELECTクエリーが失敗しました。');
	}

	while($row = pg_fetch_assoc($result)){
		$now = time() * 1000;
		$date = $row["date"];
		$url = "https://www.pxt.jp/ja/diary/article/200/";//$row["url"];

		//if ($now - $date > 864000000) {
			$sql = "DELETE FROM link WHERE url = '$url'";
			$result_flag = pg_query($sql);

			if (!$result_flag) {
				exit('DELETEクエリーが失敗しました。');
			}
		//} else {
			break;
		//}
	}

	pg_close($link);
