var express  = require('express'),
    router   = express.Router(),
    home     = require('./home'),
    article  = require('./article'),
    article_list = require('./article_list');


    router.get('/', home);
    router.get('/article/:menu/:id', article);
    router.get('/article_list/:menu/:id', article_list);

module.exports = router;
