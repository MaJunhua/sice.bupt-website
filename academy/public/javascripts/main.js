require.config({
    paths: {
        jquery: 'lib/jquery-1.11.3.min',
        resize: 'others/resize',
        respond: 'lib/respond.min',
        jqueryDropdown: 'lib/jquery-dropdown',
        login: 'others/login'
    }
});
 
require(['resize', 'jqueryDropdown', 'login','jquery'], function(resize, jd, login, $) {
    resize(window.location.pathname);
    jd();
    console.log(login, login.init)
    $('#login').parent().on('click', login.init);
});