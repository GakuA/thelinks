$(function(){
	$("#postBtn").click(function() {
		post();
	});
	$("#url").keypress(function(e) {
		if ( e.which == 13 ) {
			post();
		}
	});

	function post() {
		var url = $("#url").val();
		$("#url").val("");

		$("#modal").addClass("on");

		if (!url) {
			alert("URLを入力してください");
			$("#modal").removeClass("on");
			return;
		}

		var title = "";
		getTitle(url).done(function(result) {
			var parseResult = JSON.parse(result);
			title = parseResult.title;
			if (!title) {
				alert("リンクを作成できませんでした\n対象外のサイトかもしれません");
				$("#modal").removeClass("on");
				return;
			} else if(title == "@already@") {
				alert("リンク済です");
				$("#modal").removeClass("on");
				return;
			}
			//var title = result;
			//alert(result);
			//$("#modal").removeClass("on");

			$.ajax({
				type: "POST",
				url: "post.php",
				data: {urlAjax: url, titleAjax: title, dateAjax: new Date().getTime(), imgAjax: parseResult.img},
				success: function() {
					alert("ありがとうございます\nリンクを10日間掲載します");
					location.reload();
				}
			});

		});

	}

	function getTitle(url){
		return $.ajax({
			type: 'POST',
			data: {postUrl: url},
			url: 'getTitle.php'
		})
	}
});
