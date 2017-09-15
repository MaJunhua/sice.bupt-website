define(['jquery'], function ($) {
	var login = {};
	var id = 'loginPopUp';
	var domCache = {};
	var container = '<form id="' + id + '" class="pure-form pure-form-aligned">'
				  + '<fieldset>'
				  + '<legend>用户登录</legend>'
				  + '	<div class="pure-control-group">'
				  + '		<label for="username">用户名</label>'
				  + '		<input type="text" id="username">'
				  + '	</div>'
				  + '	<div class="pure-control-group">'
				  + '		<label for="password">密码</label>'
				  + '		<input type="password" id="password">'
				  + '	</div>'
				  + '	<div class="pure-control-group">'
				  + '		<a class="confirm pure-button">登陆</button>'
				  + '		<a class="cancel pure-button">返回</button>'
				  + '	</div>'
				  + '</fieldset>'
				  + '</form>';
	var cover = $('<div id="cover"></div>');
	var fadeIn = false;

	function setDomCache(){
		domCache[id] = document.getElementById(id);
		domCache['cover'] = document.getElementById('cover');
	}

	function insertAllDom(callback){
		var body = $('body');
		body.append(container);
		body.prepend(cover);
		callback && callback();
	}

	function confirm(){

	};

	function cancel(){
		toggleFadeInAndOut();
	};

	function toggleFadeInAndOut(){
		if(fadeIn){
			$(domCache[id]).fadeOut();
			$(domCache['cover']).fadeOut();
			console.log('fadeout')
		}else{
			$(domCache[id]).fadeIn();
			$(domCache['cover']).fadeIn();
			console.log('fadein')
		}
		fadeIn = !fadeIn;
	}

	login.init = function(){
		if(!domCache[id]){
			insertAllDom(function(){
				setDomCache();
				$('#'+id+' .cancel').on('click', cancel);
				$('#'+id+' .confirm').on('click', confirm);
			});			
		}
		toggleFadeInAndOut();
		$('body').prepend(cover);
	}

	return login;	
})