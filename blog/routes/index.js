var express = require('express');
var router = express.Router();
var markdown = require('markdown').markdown;
/* GET home page. */
router.get('/', function(req, res, next) {

  res.render('index', { title: 'Express', content : '你好'});
});

module.exports = router;
