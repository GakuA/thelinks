$(function(){
	/*
	$(".postBtn").click(function() {
		if (!$(".url").val()) {
			alert("URLを入力してください");
			return;
		}
		var url = $(".url").val();

		getTitle().done(function(result) {
			var title = result;
		});

		$.ajax({
			type: "POST",
			url: "post.php",
			data: {urlAjax: url, titleAjax: title, dateAjax: new Date().getTime()},
			success: function(result) {
				location.reload();
			}
		});
	});
*/
getTitle().done(function(result) {
	alert (result);
});

	function getTitle(){
		return $.ajax({
			type: 'POST',
			data: {postUrl: "https://www.youtube.com/"},
			url: 'getTitle.php'
		})
	}
});
