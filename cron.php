<?php
	$link = pg_connect('host=ec2-54-146-4-66.compute-1.amazonaws.com dbname=d92g50uce9vjgl user=zkwliroqdgiofi password=e63c65c7f1f58c3c4a2f30b27e52d34a736e0e0cf6f76f9abee7f663948bc692');
	if (!$link) {
		die('接続失敗です。');
	}
/*
	$result = pg_query("SELECT * FROM link order by date");

	if(!$result){
		exit('SELECTクエリーが失敗しました。');
	}

	while($row = pg_fetch_assoc($result)){
		$date = $row["date"];
		$url = $row["url"];
		$title = $row["title"];
		$html = '<div class="link"><a target="_blank" href="'.$url.'"><img src="https://s.wordpress.com/mshots/v1/'.$url.'?w=200&h=150"><span>'.$title.'</span></a></div>';
		echo $html;
	}
*/
	echo time() * 1000;
	pg_close($link);
