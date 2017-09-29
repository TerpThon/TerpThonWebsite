$(function() {
	$(".faq_scolling_link").click(function(event) {
		target = $("a[name='"+$(this).attr("href").substr(1)+"']")
		highlight(target);
		
		// Scroll Down to Requested Link
	});
	
	// Check if page requested specific question
	if(window.location.hash != "") {
	
		target = $("a[name='"+window.location.hash.substr(1)+"']")
		highlight(target);
	}
});

function highlight(target) {
	$(target).animate({
		"background-color" : "#FFF79A"
	}, 500, function() {
		$(target).animate({
			"background-color" : "#FFF"
		}, 500, function() {
			(target).animate({
				"background-color" : "#FFF79A"
			}, 500, function() {
				$(target).animate({
					"background-color" : "#FFF"
				}, 500, function() {
					(target).animate({
						"background-color" : "#FFF79A"
					}, 500, function() {
						$(target).animate({
							"background-color" : "#FFF"
						}, 500)
					})
				})
			})
		})
	});
}