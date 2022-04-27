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

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/document.css">
    
    <title>講習会資料置き場</title>
</head>
<body>
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
                    <li id="humberger_icon">
                        <label for="humberger"><img src="./img/humberger.svg"></label>
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
        <h1>講習会資料置き場</h1>
    </div>

    <div id="wrapper">
        <!-- main -->
        <main>
            <h1></h1>
            <section>
                <h2>UNIX/Linux講習会</h2>
                <li><a href="unix/unix.php">UNIX/Linuxの基礎知識</a></li>
                <li><a href="https://qiita.com/polyacetal/private/c559d4cb281c8faf1502">UNIX/Linuxコマンドの使い方</a></li>
            </section>
            
            <section>
                <h2>GitHub講習会</h2>
                <li><a href="">準備中</a></li>
            </section>

            <section>
                <h2>C言語講習会</h2>
                <li><a href="./c/lecture1.php">第1回 "Hello World"</a></li>
                <li><a href="./download/lecture2.pdf">第2回 C言語のルール (pdf)</a></li>
                <li><a href="./download/lecture3.pdf">第3回 変数 (pdf)</a></li>
                <li><a href="./download/lecture4.pdf">第4回 さまざまな演算 (pdf)</a></li>
                <li><a href="./download/lecture5.pdf">第5回 条件分岐 (pdf)</a></li>
                <li><a href="">準備中</a></li>
            </section>
            
            <section>
                <h2>外部リンク</h2>
                <li><a href="https://syllabus.kosen-k.go.jp/Pages/PublicDepartments?school_id=03">釧路高専 WEBシラバス</a></li>
            </section>

            <section>
                <h2>推薦・参考文献</h2>
                <section>
                    <h3>C言語</h3>
                    <li>大川内隆郎, 大原竜男, かんたん C言語 [改訂2版], 技術評論社, 2017.</li>
                    <li>筧捷彦, 高田大二 他, 入門 C 言語, 実教出版株式会社, 2019.</li>
                </section>
                
            </section>

        </main>
        <!-- /main -->
    </div>

    <footer>
        <div id="footer_menu">
            <div id="footer_navi">
                <h3>SITEMAP</h3>
                <ul>
                    <li><a href="./document.php">講習会資料置き場</a></li>
                </ul>
            </div>
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
    <script src="js/headerNavi.js"></script>
    <script src="js/checkbox.js"></script>
</body>
</html>


