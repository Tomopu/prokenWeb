// pre内のタブ文字削除(タブインデントが出来る)
window.addEventListener("DOMContentLoaded", function(){
     // preを取得
     var pres = document.getElementsByTagName("pre");
     // 反復処理
     for (var i = 0; i < pres.length; i++){
          // タブ文字を消す
          // pres[i].firstChild.data = pres[i].firstChild.data.replace(/^\t+/gm,"");
          // pres[i].firstChild.data = pres[i].firstChild.data.replace(/^\s+/gm,emsp);
       }
},false);