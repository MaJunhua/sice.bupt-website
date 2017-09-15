define(['jquery'], function ($) {
        var menu = document.getElementById('menu'),
            WINDOW_CHANGE_EVENT = ('onorientationchange' in window) ? 'orientationchange':
                                        window.attachEvent ? 'onresize': 'resize',
            ADD_LISTENER = document.addEventListener? 
                           'addEventListener': 'attachEvent',
            scrollHeight,
            clientWidth,
            contentDiv = $('.academy-tables').eq(0)[0],
            jquery_map = {},
            currentUrl = '/';

        function setScrollHeight(){
            this.scrollHeight = document.body.scrollHeight;
        }
        function setClientWidth(){
            this.clientWidth = document.body.clientWidth;
        }

        function resizePicture(){
            var pageHeight = document.body.scrollHeight;
            document.getElementById('background-img')
                    .style.height = pageHeight;
        }

        function changeContentPosition(height){
            contentDiv.style.marginTop = (height - 530)/2 + 'px';
        }

        function resetContentPosition(){
            contentDiv.style.marginTop = '50px';
        }

        function setFooter(width){
            jquery_map['footer'] || ( jquery_map['footer'] = $('.footer') );
            if(currentUrl === '/'){
                width < 768?
                    jquery_map['footer'].css('position', 'relative'):
                    jquery_map['footer'].css('position', 'fixed');
            }
            else{
                jquery_map['footer'].css('position', 'fixed');
            }
        }

        function onResize(){
            setScrollHeight();
            setClientWidth();
            console.log(this.clientWidth);
            // closeMenu();
            resizePicture();
            setFooter(this.clientWidth);
            this.clientWidth < 768? 
                resetContentPosition(): changeContentPosition(this.scrollHeight); 
        }

        function resize(url){
            currentUrl = url;
            window[ADD_LISTENER](WINDOW_CHANGE_EVENT, onResize);
            $(function(){
                onResize();
                $('.l-content').fadeIn(200);
            }) 
            
        }
    return  resize;
})
// 