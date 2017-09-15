var Util= require('./Util/Util');
var backServerUrl = 'http://localhost:8080';

function renderIndex(res,data){
    console.log(data[2])
    res.render('article', {
        content_1: data[0],
        content_2: data[1],
        content_3: data[2],
        menu: data[3],
        content: data[4],
        currentSideMenu: data[5]
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
        content_3 = getServerData(backServerUrl + '/controller/content_3.php', 'content_3'),
        channel   = getServerData(backServerUrl + '/controller/channel.php', 'channel'),
        article_content = getServerData(backServerUrl + '/controller/content_id.php?id=' + req.params.id, 'article_content'),
        currentSideMenu = getServerData(backServerUrl + '/controller/currentSideMenu.php?id=' + req.params.menu, 'currentSideMenu');
    Promise.all([content_1, content_2, content_3, channel, article_content, currentSideMenu])
           .then(function(data){
           	console.log('data5',data[5])
                renderIndex(res, data);
           })
}