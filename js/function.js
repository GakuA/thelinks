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
		$("#modal").addClass("on");

		if (!$("#url").val()) {
			alert("URLを入力してください");
			$("#modal").removeClass("on");
			return;
		}
		var url = $("#url").val();

		var title = "";
		getTitle(url).done(function(result) {
			if (!result) {
				alert("リンクを作成できませんでした");
				$("#modal").removeClass("on");
				return;
			}
			//var title = result;
			alert(result);
			$("#modal").removeClass("on");
			/*
			$.ajax({
				type: "POST",
				url: "post.php",
				data: {urlAjax: url, titleAjax: result, dateAjax: new Date().getTime()},
				success: function() {
					location.reload();
				}
			});
			*/
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
