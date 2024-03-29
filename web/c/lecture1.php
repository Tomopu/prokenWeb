<?php
session_start();
$userid = $_SESSION['userid'];
$permit = $_SESSION['permit'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=2">
    <!-- css -->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/lecture/style.css">
    <link rel="stylesheet" href="../css/lecture/table_style.css">
	<link rel="stylesheet" href="../css/github.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- JavaScript -->
    <script src="../prettify/prettify.js"></script>

    <title>C言語 第1回</title>
</head>
<body onload="PR.prettyPrint()">
    <div id="header_set">
        <header id="header" class="toClear">
            <h1 id="header_logo"><a href="/">NIT-KPC</a></h1>
            <nav id="global_navi">
                <ul>
                    <?php
                    if(isset($_SESSION['userid'])){
                        echo'<li><label for="menu" id="open"><i class="material-icons">account_circle</i></label></li>';
                    }else{
                        echo'<li><a href="../login_form.php" class="login_button">ログイン</a></li>';
                    }
                    ?>
                    <li id="humberger_icon">
                        <label for="humberger"><img src="../img/humberger.svg"></label>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- account_menuの表示可否のcheckbox -->
        <input id="menu" type="checkbox">
        <!-- humberger_menuの表示可否のcheckbox -->
        <input id="humberger" type="checkbox">
        <!-- account_menu -->
        <div id="account_menu">
            <nav>
                <ul>
                    <li class="account_name"><?php echo $userid; ?>さん</li>
                    <?php
                    if($permit == 0){
                        echo '<li class="select">';
                        echo '  <a href="registry_form.php"><i class="material-icons">person_add</i>アカウントの追加</a>';
                        echo '</li>';
                    }
                    ?>
                    <li class="select">
                        <a href="resetting_form.php"><i class="material-icons">key</i>パスワード変更</a>
                    </li>
                    <li class="logout select">
                        <a href="logout.php"><i class="material-icons">logout</i>ログアウト</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- /account_menu -->

        <label for="humberger" id="back"></label>
        
        <!-- humberger_menu -->
        <div id="humberger_menu">
            <nav>
                <h3>SITE MAP</h3>
                <ul>
                    <li><a href="./document.php">講習会資料置き場</a></li>
                </ul>
                <h3>PORTAL</h3>
                <ul>
                    <li><a href="https://www.kushiro-ct.ac.jp">釧路高専 公式ウェブサイト</a></li>
                    <li><a href="https://knct-kpc.github.io/index-1.html">旧 プロ研 ホームページ</a></li>
                    <li><a href="https://procon.946oss.net">U-16プログラミングコンテスト 釧路大会</a></li>
                </ul>
                <h3>SNS</h3>
                <div class="flex_container">
                    <div class="twitter circle_button"><a href="https://twitter.com/nitkpc"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a></div>
                    <div class="youtube circle_button"><a href="https://www.youtube.com/channel/UCUgpFxj_uPstprGl-Y6SC3w/featured"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg></a></div>
                    <div class="github circle_button"><a href="https://github.com/KNCT-KPC"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg></a></div>
                </div>
            </nav>
        </div>
        <!-- /humberger_menu -->
    </div>

    <div id="main_visual">
        <h1>C言語 第1回 "Hello World"</h1>
    </div>

    <div id="wrapper">
        <!-- main -->
        <main>
            <article id="article1">
                <h1>1. はじめに</h1>
                <section id="section1">
                    <h3 class="sub_heading">プログラミング言語の歴史</h3>
                    <p>私たちは日頃、日本語などの言語を用いて情報を伝達するように、コンピュータ0と1で構成される<span class="bold">機械語(Machine Language)</span>を用いて情報を処理する。しかし、機械語はCPU(中央処理装置)の種類によって内容が大きく異なることに加え、0と1の組み合わせをルールに則って膨大な量を記述することは困難である。<br>そこで、人間にも比較的理解しやすい<span class="bold">アセンブリ言語(assembly language)</span>を用いて記述し、それを機械語に変換するという仕組みが考案された。<span class="bold">アセンブリ言語</span>とは、機械語に１対１で対応する<span class="bold">簡略記憶記号(ニーモニック)</span>で記述するプログラミング言語である。その後、アセンブリ言語よりも簡単に複雑な処理を記述できるよう、C言語をはじめとする様々なプログラミング言語が開発されてきた。<br>アセンブリ言語の例:</p>
<pre>
main:
    pushl   %ebp
    movl    %esp, %ebp 
    subl    $16, %esp
    movl    $0, -4(%ebp) 
    movl    -4(%ebp), %eax 
    addl    $2, %eax
    movl    %eax, -4(%ebp) 
    movl    $0, %eax
    leave
    ret
</pre>  
                </section>
                <div class="column">
                    <h3 class="column_title"><i class="material-icons">auto_stories</i>コラム</h3>
                    <div class="text_box last_box">
                        <h4>自然言語と人工言語</h4>
                        <p>日本語や英語など、自然発生的にできた言語を<span class="bold">自然言語(Natuarl Language)</span>というのに対し、プログラミング言語など、ある情報を伝える目的のために人間が作り出した言語を<span class="bold">人工言語(Artificial Language)</span>という。</p>
                    </div>
                </div>
                <section id="section2">
                    <h3 class="sub_heading">C言語とは</h3>
                    <p><span class="bold">C言語(C language)</span>とは、1972年にAT&Tベル研究所がUNIXの移植性を高めるために開発されたプログラミング言語で、自然言語に近い形で記述できる高水準言語でありながら、メモリ管理などのハードウェアの制御が行なえる低水準言語としても動作するという特徴を持つ。<br>名前の由来は、<span class="bold">B言語(B language)</span>を後継する言語として開発されたからである。<br>以下にC言語のソースコード例を挙げるが、現時点で各行の内容を理解する必要はない。</p>
<pre class="prettyprint lang-c">
#include &lt;stdio.h&gt;

int calc(int x, int y){
    return x+y;
}
    
int main(void){
    int x = 0;
    int y = 10;
    int ans = calc(x, y);

    printf("%d + %d = %d", x, y, ans);
    return 0;
}
</pre>   
                </section>
                <div class="tips_box">
                    <div class="tips_title"><i class="material-icons">tips_and_updates</i><h3>POINT</h3></div>
                    <li>コンピュータは機械語という言語で動く。</li>
                    <li>機械語を人間が扱うのは困難なため、アセンブリ言語やC言語などのプログラミング言語が開発され、それらを後から機械語に変換するという仕組みが考案された。</li>
                    <li>C言語は高水準言語でありながら、メモリなどを直接扱える低水準言語の特徴も持つ。</li>
                </div>
            </article>

            <article id="article2">
                <h1>2. プログラムを実行するまでの流れ</h1>
                <p>プログラムを作成することを<span class="bold">プログラミング(programming)</span>といい、プログラミング言語で書かれたプログラムを<span class="bold">ソースコード(source code)</span>または<span class="bold">コード</span>という。一般に、C言語のプログラムを実行するには以下の流れで決まった手順を行う必要がある。</p>
                <section id="section3">
                    <h3 class="sub_heading">1. プログラムの作成</h3>
                    <p>C言語のプログラムは、拡張子が「.c」であるファイルを作成し、<span class="bold">テキストエディタ</span>などでソースコードを記述することで作成できる。</p>
                    <pre>$ touch ファイル名.c</pre>
                    <p><span class="bold">拡張子</span>とは、ファイルの種類を識別するためにファイル名の末尾に付けられる文字列のことで、<span class="bold">.c</span>の他に<span class="bold">.txt .exe .xlsx .docx</span>などがある。この状態のファイルは人間が読み書きをするためのものであるため、このままの形式ではコンピュータは実行できない。</p>
                </section>
                <section id="section4">
                    <h3 class="sub_heading">2. コンパイル</h3>
                    <p>C言語のプログラムが作成できたら、それを実行できる形にするために<span class="bold">コンパイル(compile)</span>という作業を行う必要がある。コンパイルとは、プログラムを機械語に翻訳(変換)することをいい、C言語の場合<span class="bold">C/C++コンパイラ(compiler)</span>というソフトウェアを用いて実行する。<br>例として、C言語のファイルをコンパイルするには、以下のようなコマンドを実行すればよい。</p>
                    <pre>$ gcc ファイル名.c -o 実行ファイル名</pre>
                    <p>このコマンドの詳しい内容は、後ほど説明する。</p>
                </section>
                <section>
                    <img src="../img/c/lecture1/compiler.png">
                    <p>また、この段階でソースファイルの記述に誤りがある場合、画面上にエラーメッセージが表示されるため、<span class="bold">デバック(debug)</span>というソースコードの間違いを修正する作業をする必要がある。</p>
                </section>
                <section id="section5">
                    <h3 class="sub_heading">3. プログラムの実行</h3>
                    <p>上記の手順が終了したら、いよいよプログラムを実行できる状態になる。2. コンパイルで生成された<span class="bold">実行ファイル(Executable file)</span>を以下のようなコマンドで指定して実行する。</p>
                    <pre>$ ./実行ファイル名</pre>
                    <p>この段階で実行結果か期待通りのものでなければ、再度手順1に戻りソースコードを修正する。</p>
                </section>
                <img src="../img/c/lecture1/programming.png">
                <div class="column">
                    <h3 class="column_title"><i class="material-icons">auto_stories</i>リファレンス</h3>
                    <div class="text_box last_box">
                        <h4>おすすめのサイト</h4>
                        <p><a href="https://www.amazon.co.jp/コンパイラ-未来へつなぐ-デジタルシリーズ-24-佐渡/dp/4320123441">佐渡一広他 未来へつなぐデジタルシリーズ24 コンパイラ(共立出版)</a>: (<a href="https://syllabus.kosen-k.go.jp/Pages/PublicSyllabus?school_id=03&department_id=11&subject_id=0070&year=2019&lang=ja">4Jコンパイラ</a>の教科書)</p>
                        <p>低レイヤを知りたい人のためのCコンパイラ作成入門: <a href="https://www.sigbus.info/compilerbook">https://www.sigbus.info/compilerbook</a></p>
                    </div>
                </div>
            </article>

            <article id="article3">
                <h1>3. C言語を書いてみる</h1>
                <section>
                    <p>それでは実際に、C言語のソースコードを記述していく。まずは、<span class="bold">hello.c</span>というソースファイルを作成し、以下の内容をテキストエディタを使って記入してみよう。</p>
<pre class="prettyprint lang-c">
#include &lt;stdio.h&gt;
    
int main(void){
    printf("Hello World!!\n");
    return 0;
}
</pre>
                    <div class="git_link">
                        <a href="https://github.com/Tomopu/cLang/blob/main/lecture1/hello.c"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>ソースコードをダウンロード</a>
                    </div>
                    <p>上記のソースコードが書けたらファイルをセーブして、次に<span class="bold">コンパイル</span>を行う。以下のコマンドを<span class="bold">ターミナル(コマンドライン)</span>に入力してコンパイルを行ってみよう。</p>
                    <pre>$ gcc hello.c -o hello</pre>
                    <p>コンパイルをすると、<span class="bold">hello.c</span>とは別に<span class="bold">hello</span>という名前の実行ファイルが生成されている。以下のコマンドを入力して確認してみよう。</p>
                    <pre>$ ls</pre>
                    <p>それでは、コンパイルして生成された<span class="bold">hello</span>を実行してみよう。</p>
                    <pre>$ ./hello</pre>
                    <p>コマンドを打った行のすぐ下に<span class="bold">Hello World!!</span>と表示されたはずである。先ほど記述した6行のソースコードは、C言語の中でも最も基本となる<span class="bold">”Hello World”</span>と呼ばれる構文で、<span class="bold">printf関数</span></p>
                    <pre class="prettyprint lang-c">printf(" \n");</pre>
                    <p>の<span class="bold">"</span>から<span class="bold">"</span>で囲まれた部分を画面に表示させるというプログラムである。ここで、<span class="bold">\n</span>は「改行する」という命令であることに注意。<br>各命令の詳しい定義に関しては、<span class="bold">C言語 第2回</span>の講義で説明する。</p>  
                </section>
            </article>

            <article id="article4">
                <h1>4. 本日の課題</h1>
                <section>
                    <h3 class="sub_heading">課題1</h3>
                <p>実行ファイルを実行した際に、画面上に「<span class="bold">自分の名前 年齢</span>」が表示されるプログラム<span class="bold">intro.c</span>を作成せよ。以下にコンパイルと実行した際の例を示す。</p>
<pre>
$ gcc intro.c -o intro
$ ./intro
山田 太郎 18歳
</pre>
                <div class="hidden_box">
                    <label for="label2"><i class="material-icons">add</i>クリックして回答を表示</label>
                    <input type="checkbox" id="label2"/>
                    <!--非表示ここから-->
                    <div class="hidden_show">
<pre class="prettyprint lang-c">
#include &lt;stdio.h&gt;
                                    
int main(void){
    printf("山田 太郎 18歳\n");
    return 0;
}
</pre>
                        <div class="git_link">
                            <a href="https://github.com/Tomopu/cLang/blob/main/lecture1/kadai/intro.c"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>ソースコードをダウンロード</a>
                        </div>
                    </div>
                    <!--ここまで-->
                </div>  
                </section>
                <div class="caution_box">
                    <div class="caution_title"><i class="material-icons">warning_amber</i><h3>CAUTION</h3></div>
                    <p>printf関数の""の中に<span class="bold">\n</span>を入れるのを忘れないように注意。</p>
                </div>
            </article>
            <article class="article5">
                <h1>参考文献</h1>
                <section>
                    <li>佐渡一広, 寺島美昭, 水野忠則, 未来へつなぐデジタルシリーズ 24 コンパイラ, 共立出版.</li>
                </section>
            </article>
        </main>
        <!-- /main -->

        <!-- aside -->
        <aside>
            <div id="widget">
                <p id="side_menu">目次</p>
                <ul>
                   <li><a href="#article1">1. はじめに</a></li>
                   <li class="list_indent"><a href="#section1">プログラミング言語の歴史</a></li>
                   <li class="list_indent"><a href="#section2">C言語とは</a></li>
                   <li><a href="#article2">2. プログラムを実行するまでの流れ</a></li>
                   <li class="list_indent"><a href="#section3">1. プログラムの作成</a></li>
                   <li class="list_indent"><a href="#section4">2. コンパイル</a></li>
                   <li class="list_indent"><a href="#section5">3. プログラムの実行</a></li>
                   <li><a href="#article3">3. C言語を書いてみる</a></li>
                   <li><a href="#article4">4. 本日の課題</a></li>
                   <li><a href="#article5">参考文献</a></li>
                </ul>
             </div>
        </aside>
        <!-- /aside -->
    </div>

    <footer>
        <div id="footer_menu">
            <div id="footer_portal">
                <h3>PORTAL</h3>
                <ul>
                    <li><a href="https://www.kushiro-ct.ac.jp">釧路高専 公式ウェブサイト</a></li>
                    <li><a href="https://knct-kpc.github.io/index-1.html">旧 プロ研 ホームページ</a></li>
                    <li><a href="https://procon.946oss.net">U-16プログラミングコンテスト 釧路大会</a></li>
                </ul>
            </div>
            <div id="footer_navi">
                <h3>SNS</h3>
                <div class="flex_container">
                    <div class="twitter circle_button"><a href="https://twitter.com/nitkpc"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a></div>
                    <div class="youtube circle_button"><a href="https://www.youtube.com/channel/UCUgpFxj_uPstprGl-Y6SC3w/featured"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg></a></div>
                    <div class="github circle_button"><a href="https://github.com/KNCT-KPC"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg></a></div>
                </div>
            </div>
        </div>
    
        <div id="cmark">&copy; 2022 National Institute of Technology Kushiro College Programming Circle, All rights reserved. </div>
    </footer>

    <!-- Java Script -->
    <script src="../js/headerNavi.js"></script>
</body>
</html>