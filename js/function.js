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
		if (!$("#url").val()) {
			alert("URLを入力してください");
			return;
		}
		var url = $("#url").val();

		getTitle(url).done(function(result) {
			if (!result) {
				alert("URLを入力してください");
				return;
			}
			//var title = result;
			alert(result);
		});
/*
		$.ajax({
			type: "POST",
			url: "post.php",
			data: {urlAjax: url, titleAjax: title, dateAjax: new Date().getTime()},
			success: function() {
				location.reload();
			}
		});
		*/
	}
	function getTitle(url){
		return $.ajax({
			type: 'POST',
			data: {postUrl: url},
			url: 'getTitle.php'
		})
	}
});
