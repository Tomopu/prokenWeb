'use-strict';

let sliderlist;
let items;      // .slider_itemのノードリスト
let itemsNum;    // .slider_itemの要素数
let item;       // .slider_itemの最初の要素
let width;      // .slider_itemの横幅

const next = document.getElementById('next');
const prev = document.getElementById('prev');

let counter = 0;    //  カウンター

function getValue(){
    sliderlist = document.getElementById('sliderlist');
    items = document.querySelectorAll('.slider_item');
    itemsNum = items.length;
    item = document.querySelector('.slider_item');
    width = item.clientWidth;
    return;
}

next.addEventListener('click', function(){
    console.log('click!!');
    if(counter == itemsNum-1) return;
    counter++;
    prev.style.display = 'block';
    sliderlist.style.transition = '.3s';
    sliderlist.style.transform = 'translateX(' + (- width * counter) + "px)";

    sliderlist.addEventListener('transitionend', function(){
        if(counter == itemsNum-1){
            sliderlist.style.transition = 'none';
            next.style.display = 'none';
        }
    });
});

prev.addEventListener('click', function(){
    console.log('click!!');
    if(counter == 0) return;
    counter--;
    next.style.display = 'block';
    sliderlist.style.transition = '.3s';
    sliderlist.style.transform = 'translateX(' + (- width * counter) + "px)";
        
    sliderlist.addEventListener('transitionend', function(){
        if(counter == 0){
            sliderlist.style.transition = 'none';
            prev.style.display = 'none';
        }
    });
});

// HTMLの読み込み完了時のイベントリスナー
window.addEventListener("DOMContentLoaded", function() {
	getValue();
});

// 画面のサイズ変更時のイベントリスナー
window.addEventListener("resize", function() {
	getValue();
});