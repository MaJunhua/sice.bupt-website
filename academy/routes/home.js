var Util= require('./Util/Util');

var backServerUrl = 'http://localhost:8080';
/* GET home page. */
function renderIndex(res,data){
	console.log(data[2])
	res.render('index', {
	  	content_1: data[0],
	  	content_2: data[1],
	  	content_3: data[2],
	  	menu: data[3]
		});
}

function getServerData(url, dataName){
		var promise = new Promise(function(resolve, reject){
			Util.get(url, function(data){
				resolve(data);
			});
		});
		return promise;
	}

module.exports = function(req,res,next){
	var content_1 = getServerData(backServerUrl + '/controller/content_1.php', 'content_1'),
		content_2 = getServerData(backServerUrl + '/controller/content_2.php', 'content_2'),
		content_3 = getServerData(backServerUrl + '/controller/content_3.php', 'content_3');
		channel   = getServerData(backServerUrl + '/controller/channel.php', 'channel');

	Promise.all([content_1, content_2, content_3, channel])
		   .then(function(data){
		   		renderIndex(res, data);
		   })
}