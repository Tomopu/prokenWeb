let container;          // #containerの要素
let containerWidth;     // #containerの横幅
let sliderlist;         // #sliderlistの要素
let items;              // .sliderlist_itemのノードリスト
let itemsNum;           // .sliderlist_itemの要素数
let item;               // .sliderlist_itemの最初の要素
let itemWidth;          // .sliderlist_itemの横幅
let margin;             // margin幅
const min_margin = 10;

// Next(Prev)ボタンの取得
const next = document.getElementById("next");
const prev = document.getElementById("prev");

console.log(next);
console.log(prev);

let counter = 0;            // カウンターの設定
const max_display = 2;      // 画面に表示する最大のitemの数
let display = max_display;  // 画面に表示されているitemの数


// itemのmarginをレスポンシブに設定する
function setMarginOfItem(displayNum){

    container = document.getElementById("container");
    containerWidth = container.clientWidth;

    // (静的に)sliderlist_itemクラスの要素を全て取得
    items = document.querySelectorAll(".sliderlist_item");
    itemsNum = items.length; // itemの数

    item = document.querySelector(".sliderlist_item");
    itemWidth = item.clientWidth;

    sliderlist = document.getElementById("sliderlist");

    let display = 0;        // 画面に表示されているitemの数
    if(containerWidth - (min_margin * (display + 1) ) > itemWidth * displayNum){
        if(displayNum == 0){    // ディスプレイの数が0の時の処理
            console.log("Error: number of displays is zero.");
            return;
        }else{
            display = displayNum;   // 表示するディスプレイの数を代入
        }
        // marginを計算して割り当て
        margin = (containerWidth-itemWidth*display)/(display+1);
        for(let i = 0; i < itemsNum; i++){
            items[i].style.marginLeft = margin + 'px';
            // if(i == itemsNum-1) items[i].style.marginRight = margin + 'px'; // 最後の要素だけmargin-leftを指定する
        }
        return;
    }else{
        // 表示するディスプレイの数を減らして再起処理
        setMarginOfItem(displayNum-1);
    }

}

next.addEventListener("click", function(){    
    if(counter == itemsNum-display) return;   // 最後の要素に行ったら動かさない
    counter++;
    if(counter == 0){
        prev.style.display = "none";
    }else{
        prev.style.display = "block";
    }
    sliderlist.style.transition = ".3s";
    sliderlist.style.transform = "translateX("+ (- (itemWidth + margin) * counter) + "px)";

    sliderlist.addEventListener("transitionend", function(){
        if(counter == itemsNum-display){
            sliderlist.style.transition = "none";
            next.style.display = "block";
        }
    });
});

prev.addEventListener("click", function(){
    if(counter == 0) return;    // 最初の要素に行ったら動かさない
    counter--;
    if(counter == itemsNum-display){
        next.style.display = "none";
    }else{
        next.style.display = "block";
    }
    sliderlist.style.transition = ".3s";
    
    sliderlist.style.transform = "translateX("+ (- (itemWidth + margin) * counter) + "px)";

    sliderlist.addEventListener("transitionend", function(){
        if(counter == 0){
            sliderlist.style.transition = "none";
            prev.style.display = "none";
        }
    });
});

// HTMLの読み込み完了時のイベントリスナー
window.addEventListener("DOMContentLoaded", function() {
	setMarginOfItem(max_display);
});

// 画面のサイズ変更時のイベントリスナー
window.addEventListener("resize", function() {
	setMarginOfItem(max_display);
});

