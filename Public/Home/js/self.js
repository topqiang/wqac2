$(function () {
	$("[canedi='true']").on('dblclick',function () {
		$(this).attr("contenteditable","true").trigger("focus");
	}).on("blur",function () {
		$(this).attr("contenteditable","false");
	});
	
});
