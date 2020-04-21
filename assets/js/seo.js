let seo = { 
	setTitle : function (title) {
		$("title").text(title);
		$("#title").attr('content', title);
	}, 
	setKeywords : function (description) {
		$("#keywords").attr("content", description);
		$("#description").attr("content", description);
	},
	setImg : function (img) {
		$("#image").attr("content", img);
	},
};