<?php
	$link = pg_connect('host=ec2-52-73-213-161.compute-1.amazonaws.com dbname=d6ehrn11a10an2 user=wfobbwokrzkgqt password=be23c6b07d6ef2162819f359b437c929c288edbb707c13034d9a38f9cd4425b0');
	if (!$link) {
		die('ただ今メンテナンス中です。');
	}

	$result = pg_query("SELECT * FROM link order by date desc");

	if(!$result){
		exit('SELECTクエリーが失敗しました。');
	}
//	$linkNo = 1;
	while($row = pg_fetch_assoc($result)){
		/*
		if ($linkNo%10 == 1) {
			echo '<div class="link adPC"><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="142a8617.af4bd4b0.142a8618.1730d9f1";rakuten_items="ctsmatch";rakuten_genreId="0";rakuten_size="200x200";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="on";rakuten_auto_mode="on";rakuten_genre_title="off";rakuten_recommend="on";rakuten_ts="1603412175006";</script><script type="text/javascript" src="https://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script></div>';
			echo '<div class="link adSP"><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="142a8617.af4bd4b0.142a8618.1730d9f1";rakuten_items="ctsmatch";rakuten_genreId="0";rakuten_size="320x48";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="on";rakuten_auto_mode="on";rakuten_genre_title="off";rakuten_recommend="on";rakuten_ts="1603758512137";</script><script type="text/javascript" src="https://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script></div>';
		}
		$linkNo++;
		*/
		$url = $row["url"];
		$title = $row["title"];
		$img = $row["img"];
		if (!$img) {
			$img = 'https://s.wordpress.com/mshots/v1/'.$url.'?w=200&h=150';
		}
		$html = '<div class="link"><a target="_blank" href="'.$url.'"><img src="'.$img.'"><span>'.$title.'</span></a></div>';
		echo $html;
	}

	pg_close($link);
