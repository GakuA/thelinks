$(function() {
	getLinks(url).done(function(links) {
		$("#links").html(links);
	});

	function getLinks(url){
		return $.ajax({
			type: "POST",
			url: "links.php",
		})
	}
});
