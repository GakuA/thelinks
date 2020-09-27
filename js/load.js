$(function() {
	$.ajax({
		type: "POST",
		url: "links.php",
		success: function(data) {
			$("#links").html(data);
		}
	});
});
