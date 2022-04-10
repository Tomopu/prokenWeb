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

    <script src="../prettify/prettify.js"></script>

    <title>UNIX / Linuxの基礎知識</title>
</head>
<body onload="PR.prettyPrint()">
    <div id="header_set">
        <header id="header">
            <h1 id="header_logo"><a href="/">NIT-KPC</a></h1>
            <nav id="global_navi">
                <ul>
                    <?php
                    if(isset($_SESSION['userid'])){
                        echo'<li><label for="menu" id="open"><i class="material-icons">account_circle</i></label></li>';
                    }else{
                        echo'<li><a href="login_form.php" class="login_button">ログイン</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </header>
        <!-- account_menuの表示可否のcheckbox -->
        <input id="menu" type="checkbox">
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
    </div>

    <div id="main_visual">
        <h1>UNIX / Linuxの基礎知識</h1>
    </div>

    <div id="wrapper">
        <!-- main -->
        <main>
            <article id="article1">
                <h1>1. UNIX / Linuxとは</h1>
                <section id="section1">
                    <h3 class="sub_heading">UNIX</h3>
                    <p><span class="bold">UNIX(ユニックス)</span>は、OSの一つで1969年に AT&T Bell研究所が<span class="bold">アセンブリ言語</span>で開発し、1971年に公開されたOSです。その後、1973年にはシステムのほぼ全体がC言語で書き直されました。<br>公開当時、UNIX以外のOSはいくつもあったものの、アセンブリ言語からC言語に置き換えたことによって開発や異なる機種への移植が容易になり、教育や実用的に広く使われるようになります。それから現在に至るまで、UNIXはさまざまなUNIX/Linux系OSの基礎となると同時に、その他多くのOSへ影響を与えました。</p>   
                </section>
                <section id="section2">
                    <h3 class="sub_heading">Linux</h3>
                    <p><span class="bold">Linux(リナックス)</span>は、1991年に学生だったLinus Benedict Torovalds氏が開発した、Unix系(Unix like)のOSで、LinuxはUNIXと同等の機能を備えつつ、<span class="bold">オープンソース</span>(自由に入手、使用、開発、改変、再配布ができる)であることが特徴です。<br>その後、世界中の開発者たちのボランティアによって開発・維持を続け、オリジナルのLinuxを元に各開発者がカスタマイズした<span class="bold">ディトリビューション</span>が数多く配布されています。</p>   
                </section>
                <img src="../img/unix/os.png">
                <div class="column">
                    <h3 class="column_title"><i class="material-icons">auto_stories</i>用語集</h3>
                    <section>
                        <h4>アセンブリ言語 (assembly language)</h4>
                        <p>CPUの処理を命令する機械語に一対一で対応する簡略記憶記号<span class="bold">(ニーモニック)</span>で記述するプログラミング言語。通常、機械語は2進数(0と1)で表記されるため、ニーモニックを用いることで人間が理解しやすくすることを目的としています。<br>(画像 : アセンブリ言語の例)</p>
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
                    <section>
                        <h4>Linus Benedict Torvalds</h4>
                        <p>フィンランド、ヘルシンキ生まれ (1969年12月28日) ヘルシンキ大学卒業 Linuxカーネルの開発者</p>
                    </section>
    
                    <section class="last_item">
                        <h4>ディストリビューション(distribution)</h4>
                        <p>ハードウェアの制御やファイルの実行、リソースなどの管理を行うOSの中核部分のことを<span class="bold">カーネル(kernel)</span>といい、カーネルとその他のOSを形成するソフトウェア群をひとつにまとめた配布形態を<span class="bold">ディストリビューション(distribution)</span>と呼びます。<br>ディストリビューションとして配布することで、開発者は1からOSを構築をするという労力を削減できるというメリットがあります。<br>Linuxのディストリビューションには大きく3つの系統があり、<span class="bold">Slackware系</span>、<span class="bold">Redhat系</span>、<span class="bold">Debian系</span>があります。</p>
                    </section>
                </div>
            </article>

            <article id="article2">
                <h1>2. GUI / CUIとは</h1>
                <section id="section3">
                    <h3 class="sub_heading">UI</h3>
                    <p>一般的に、ユーザー(User)と デバイスやサービスとを結びつける(Interface)ものを<span class="bold">UI(User Interface)</span>いいます。<br>Webサービスであれば、サイトのデザインやフォントのサイズ、ゲームであれば、ボタンの大きさや操作感など、<span class="bold">見やすさ・使いやすさ</span>に繋がるものがUIにあたります。</p>
                </section>
                <section id="section4">
                    <h3 class="sub_heading">GUI</h3>
                    <p><span class="bold">GUI(Graphical User Interface)</span>とは、グラフィカル(絵画的)に表現されるUIのことです。画像やアイコンを画面上に表示することで、ユーザーは直感的な操作をすることができます。</p>
                </section>
                <section id="section5">
                    <h3 class="sub_heading">CUI</h3>
                    <p><span class="bold">CUI(Character User Interface)</span>とは、キャラクタ(文字)で表現されるUIのことです。マウスで操作するGUIとは異なり、CUIはキーボードでコマンドを入力して操作します。<br>以降、この記事ではCUIを使用します。</p> 
                    <div class="caution_box">
                        <div class="caution_title no-select"><i class="material-icons">warning_amber</i><h3>CAUTION</h3></div>
                        <h4>なぜ、CUIを使うの?</h4>
                        <p>CUIを使う最大のメリットは、<span class="bold">一度に多くの処理ができる</span>ということです。<br>後ほど詳しく説明しますが、<span class="bold">正規表現</span>や<span class="bold">論理演算子</span>を用いることで、たとえば、一度に100個のファイルを作成することができます。<br>CUIに慣れないうちは操作が大変かもしれませんが、使いこなせれば作業効率が大幅に上がりますので、なるべく早く慣れるために普段からCUIを使用するよう心がけましょう。</p>
                    </div> 
                </section>
                <!-- 注意ボックス -->
                <img src="../img/unix/gui_cui.png">
            </article>

            <article id="article3">
                <h1>3. ファイルツリーとは</h1>
                <section class="section6">
                    <h3 class="sub_heading">ファイル</h3>
                    <p>OSのファイルシステムが管理するひとかたまりのデータの単位のことを<span class="bold">ファイル(file)</span>といいます。<br>ファイル名や属性、サイズや保護情報など、データにファイルの管理情報を付加することで、ユーザーやシステムがデータを管理しやすくなります。</p>
                </section>
                <section class="section7">
                    <h3 class="sub_heading">ディレクトリ</h3>
                    <p><span class="bold">ディレクトリ(directory)</span>とは、ファイルを階層化して分類・管理するための概念で、ファイルを格納するための入れ物のような振る舞いをします。<br>WindowsやMacOSなどでは、<span class="bold">フォルダ(folder)</span>ともいいます。</p>
                    <div class="caution_box">
                        <div class="caution_title"><i class="material-icons">warning_amber</i><h3>CAUTION</h3></div>
                        <p>実際は、属性がディレクトリとなっているだけで、OSのファイルシステム上では<span class="bold">ディレクトリも通常のファイル</span>として保存されており、中身にはファイルの管理情報などが格納されています。本題から外れてしまうため詳しい内容は説明しませんが、興味のある人はインターネットや書籍で調べてみましょう。</p>
                    </div> 
                </section>
                
                <section class="section8">
                    <h3 class="sub_heading">ファイルツリー</h3>
                    <p>上でも述べた通り、ディレクトリとファイルは階層構造になっており、それぞれが接続関係を持っています。UNIXにおけるこの関係は、あるディレクトリから枝分かれをしてファイルを枝の先の葉とした<span class="bold">木(tree)</span>に見立てることができ、これを<span class="bold">木構造(tree structure)</span>、特にこの場合では<span class="bold">ファイルツリー(file tree)</span>といいます。<br>ここでは、この記事を作成するにあたって参考にした書籍になぞって、ディレクトリとファイルを以下のような記号で表すことにします。</p>
                </section>
                <img src="../img/unix/dir_and_file.png">
                <section>
                    <p>以下はファイルツリーの図です。接続関係を持つディレクトリとファイルを線分で結び、記号の上にはそれぞれのファイルの名前を書きます。</p>
                </section>
                <img src="../img/unix/file_tree.png">
                <section id="section9">
                    <h3 class="sub_heading">ホームディレクトリ</h3>
                    <p>UNIXシステムでは各ユーザーに対して、<span class="bold">ホームディレクトリ(home directory)</span>と呼ばれる特別なディレクトリが割り当てられ、ディレクトリ名を特に指定しない限り、各ユーザーは自分のログイン名と同じ名前のホームディレクトリ下で操作をすることになります。<br>自分が所有するホームディレクトリ内では、システム管理者が与えた権限を超えない範囲で<span class="bold">ファイルやディレクトリを作成</span>したり、逆に<span class="bold">削除</span>したりすることができます。</p>
                </section>
                <section id="section10">
                    <h3 class="sub_heading">ルートディレクトリ</h3>
                    <p>上のファイルツリーの図の一番左にあるディレクトリは、木構造の<span class="bold">根(root)</span>の部分に見立てて<span class="bold">ルートディレクトリ(root directory)</span>と呼ばれます。<br>ルートディレクトリには他のディレクトリのような名前は付けられないため、図の記号の上にもディレクトリ名は記述しません。<br>また、ルートディレクトリは全てのユーザーに対して共通のディレクトリになっているため、システム管理者以外のユーザーは、ルートディレクトリ内にあるファイルやディレクトリを削除・変更できない場合がほとんどです。</p>
                </section>
                <section id="section11">
                    <h3 class="sub_heading">カレントディレクトリ</h3>
                    <p>今現在の時点で操作対象となっているディレクトリのことを、現在という意味の形容詞<span class="bold">カレント(current)</span>を用いて<span class="bold">カレントディレクトリ(current directory)</span>といいます。</p>
                </section>
                <img src="../img/unix/current_dir.png">
            </article>
            <article id="article4">
                <h1>4. ターミナル / シェルとは</h1>
                <section id="section12">
                    <h3 class="sub_heading">ターミナル(端末)</h3>
                    <p><span class="bold">ターミナル(terminal)</span>とは、GUI上でCUIを利用するソフトウェアのことです。<br>OSによってターミナルのアプリケーションの名前は異なりますが、どれも同じような動作をするので問題ありません。UbuntuやMacOSなどは標準でUNIX / Linuxコマンドを使えますが、Windowsの場合は<span class="bold">WSL(Windows Subsystem for Linux)</span>を有効にする必要があります。</p>
                </section>
                <section id="section12">
                    <h3 class="sub_heading">シェル</h3>
                    <p><span class="bold">シェル(shell)</span>とは、ターミナルに打ち込んだコマンドをOSの中核部分である<span class="bold">カーネル(kernel)</span>へ伝達する「橋渡し役」のソフトウェアです。有名なものでは<span class="bold">Bash</span>や<span class="bold">Z Shell</span>などがあります。</p>
                </section>
                <img src="../img/unix/terminal_and_shell.png">
            </article>
            <article class="article5">
                <h1>参考文献</h1>
                <section>
                    <li>株式会社インターフェイス. Interface 2019年5月号 あなたの知らないモダンOSの世界. CQ出版社</li>
                    <li>渡辺成良. 若月光夫. 織田健. UNIXコンピュータリテラシー―ネットワーク時代の計算機利用とモラル 第2版. 共立出版</li>
                    <li>佐渡一広. 寺島美昭. 水野忠則. 未来へつなぐデジタルシリーズ 24 コンパイラ. 共立出版</li>
                    <li>末永貴一. 第2回 ディストリビューションとは | Linux技術者. LPI-Japan. https://lpi.or.jp/lpic_all/linux/intro/intro02.shtml</li>
                    <li>@tadsan. シェル、ターミナル、コンソール、コマンドライン. Qiita. 2015-09-23. https://qiita.com/tadsan/items/441dcd910537d3f408e5</li>
                </section>
            </article>
        </main>
        <!-- /main -->

        <!-- aside -->
        <aside>
            <div id="widget">
                <p id="side_menu">目次</p>
                <ul>
                   <li><a href="#article1">1. UNIX / Linuxとは</a></li>
                   <li class="list_indent"><a href="#section1">UNIX</a></li>
                   <li class="list_indent"><a href="#section2">Linux</a></li>
                   <li><a href="#article2">2. GUI / CUIとは</a></li>
                   <li class="list_indent"><a href="#section3">UI</a></li>
                   <li class="list_indent"><a href="#section4">GUI</a></li>
                   <li class="list_indent"><a href="#section5">CUI</a></li>
                   <li><a href="#article3">3. ファイルツリーとは</a></li>
                   <li class="list_indent"><a href="#section6">ファイル</a></li>
                   <li class="list_indent"><a href="#section7">ディレクトリ</a></li>
                   <li class="list_indent"><a href="#section8">ファイルツリー</a></li>
                   <li class="list_indent"><a href="#section9">ホームディレクトリ</a></li>
                   <li class="list_indent"><a href="#section10">ルートディレクトリ</a></li>
                   <li class="list_indent"><a href="#section11">カレントディレクトリ</a></li>
                   <li><a href="#article4">4. ターミナル / シェルとは</a></li>
                   <li class="list_indent"><a href="#section12">ターミナル(端末)</a></li>
                   <li class="list_indent"><a href="#section13">シェル</a></li>
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
                    <li><a href="https://knct-kpc.github.io">旧 プロ研 ホームページ</a></li>
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