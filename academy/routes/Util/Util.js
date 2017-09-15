var http = require('http');
var BufferHelper = require('bufferhelper');

var Util = {};

Util.get = function(url, callback){
	http.get(url, function(res){
		var bufferHelper = new BufferHelper();
		res.on('data', function(chunk){
			bufferHelper.concat(chunk);
		})
		res.on('end', function(){
			var data = bufferHelper.toBuffer().toString();
			data = data.replace('﻿', '');//左边那一个是异常字符，但是打不出来，不替换在解析为json对象时会报错
			JsonData = JSON.parse(data);
			callback && callback(JsonData);
		});
	});
}

module.exports = Util;