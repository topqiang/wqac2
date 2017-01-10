var express = require('express');
var router = express.Router();
var markdown = require('markdown').markdown;

/* GET users listing. */
router.post('/',function(req,res,next){
	var markdowntext = req.body.mkToHTML;
	var json = {
		"flag" : "error",
		"message" : "未知错误！",
		"data" : markdowntext
	};
	if (markdowntext) {
		var str = markdown.toHTML(markdowntext);
		if (str) {
			json.flag = "success";
			json.message = "转换成功！";
			json.data = str;
		}
	}
	res.json( json );
});


module.exports = router;
