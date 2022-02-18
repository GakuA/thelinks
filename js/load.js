$(function() {
	$.ajax({
		type: "POST",
		url: "links.php",
		success: function(data) {
			$("#links").html(data);
			console.log($("#links .link").length);
		}
	});
});
