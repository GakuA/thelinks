<?php
	$link = pg_connect('host=ec2-54-146-4-66.compute-1.amazonaws.com dbname=d92g50uce9vjgl user=zkwliroqdgiofi password=e63c65c7f1f58c3c4a2f30b27e52d34a736e0e0cf6f76f9abee7f663948bc692');
	if (!$link) {
		die('接続失敗です。');
	}

	$result = pg_query("SELECT * FROM link order by date desc");

	if(!$result){
		exit('SELECTクエリーが失敗しました。');
	}
	$linkNo = 9;
	while($row = pg_fetch_assoc($result)){
		$url = $row["url"];
		$title = $row["title"];
		$img = $row["img"];
		if (!$img) {
			$img = 'https://s.wordpress.com/mshots/v1/'.$url.'?w=200&h=150';
		}
		$html = '<div class="link"><a target="_blank" href="'.$url.'"><img src="'.$img.'"><span>'.$title.'</span></a></div>';
		echo $html;

		if ($linkNo == 10) {
			echo '<div class="link adPC"><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="142a8617.af4bd4b0.142a8618.1730d9f1";rakuten_items="ctsmatch";rakuten_genreId="0";rakuten_size="200x200";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="on";rakuten_auto_mode="on";rakuten_genre_title="off";rakuten_recommend="on";rakuten_ts="1603412175006";</script><script type="text/javascript" src="https://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script></div>';
			echo '<div class="link adSP"><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="142a8617.af4bd4b0.142a8618.1730d9f1";rakuten_items="ctsmatch";rakuten_genreId="0";rakuten_size="320x48";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="on";rakuten_auto_mode="on";rakuten_genre_title="off";rakuten_recommend="on";rakuten_ts="1603758512137";</script><script type="text/javascript" src="https://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script></div>';
		}

		//$linkNo++;
	}

	pg_close($link);
