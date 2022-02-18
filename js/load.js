$(function() {
	$.ajax({
		type: "POST",
		url: "links.php",
		success: function(data) {
			$("#links").html(data);
			//console.log($("#links .link").length);
			// 複製するHTML要素を取得
			var adPC = $(".adPC")[0];
			var adSP = $(".adSP")[0];


			for (i=0; i<$("#links .link").not(".adPC, .adSP").length; i++) {
				if (i % 10 == 9) {
					// 複製
					var clone_adPC = adPC.cloneNode(true);
					var clone_adSP = adSP.cloneNode(true);
					// 複製したHTML要素をページに挿入
					$("#links .link").not(".adPC, .adSP")[i].after(clone_adSP);
					$("#links .link").not(".adPC, .adSP")[i].after(clone_adPC);
				}
			}
		}
	});
});
