var account_menu = document.getElementById('menu');
var humberger_menu = document.getElementById('humberger');

var header = document.getElementById('header');

function toClear(checked){
    var rect = wrapper.getBoundingClientRect();
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const elemTop = rect.top + scrollTop;
    var headerSet = document.getElementById('header_set');
    var scroll = document.documentElement.scrollTop || document.body.scrollTop;	// スクロールの上部座標
    
    if(elemTop > scroll) {
        if(header.classList.contains('toClear') && checked == true){
			//ヘッダーが上から出現する
			header.classList.remove('toClear');
			header.classList.add('toOpacity');
		}else if(header.classList.contains('toOpacity') && checked == false){
			//ヘッダーが上から出現する
			header.classList.remove('toOpacity');
			header.classList.add('toClear');
		}
	}
}   

account_menu.addEventListener('change', function(){
    if(header != null) toClear(account_menu.checked);
    humberger_menu.checked = false;
});

humberger_menu.addEventListener('change', function(){
    if(header != null) toClear(humberger_menu.checked);
    account_menu.checked = false;
});