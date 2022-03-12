// main_visualの分だけwrapperを下げる
function ChangeWrapperPaddingTop() {
    // main_visualの高さを取得
	var mainVisual = document.getElementById('main_visual');
	var mainVisualHeight = mainVisual.clientHeight;     // main_visualの高さ

    // wrapperの高さを取得
	var wrapper = document.getElementById('wrapper');
	var wrapperPaddingTop = wrapper.style.paddingTop;     // headerの高さ

    // wrapperの余白をmain_visualの高さ分追加
	wrapper.style.paddingTop= (wrapperPaddingTop+mainVisualHeight) + 'px';
}

// HTMLの読み込み完了時のイベントリスナー
window.addEventListener('DOMContentLoaded', function() {
	ChangeWrapperPaddingTop();
});

// 画面のサイズ変更時のイベントリスナー
window.addEventListener('resize', function() {
	ChangeWrapperPaddingTop();
});