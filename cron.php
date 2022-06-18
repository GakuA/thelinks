<?php
	$link = pg_connect('host=ec2-52-73-213-161.compute-1.amazonaws.com dbname=d6ehrn11a10an2 user=wfobbwokrzkgqt password=be23c6b07d6ef2162819f359b437c929c288edbb707c13034d9a38f9cd4425b0');
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
		$url = $row["url"];

		if ($now - $date > 864000000) {
			$sql = "DELETE FROM link WHERE url = '$url'";
			$result_flag = pg_query($sql);

			if (!$result_flag) {
				exit('DELETEクエリーが失敗しました。');
			}
		} else {
			break;
		}
	}

	pg_close($link);
