<?php
session_start();

if(!isset($_SESSION['userid'])){
    header('Location:index.php');
}
$userid = $_SESSION['userid'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=2">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- css -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/registry_form.css">
    
    <title>釧路高専　プログラミング研究会</title>
</head>
<body>
    <div id="header_set">
        <header id="header" class="toClear">
            <h1 id="header_logo"><a href="/">NIT-KPC</a></h1>
            <nav id="global_navi">
                <ul>
                    <?php
                    if(isset($_SESSION['userid'])){
                        echo '<li><label for="menu" id="open"><i class="material-icons">account_circle</i></label></li>';
                    }else{
                        echo '<li><a href="login_form.php" class="login_button">ログイン</a></li>';
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

    <div id="main_visual"></div>
    
    <div id="wrapper">
        <!-- main -->
        <main>
            <!-- パスワードを表示するためのチェックボックス　-->
            <input id="old-eye_button" class="eye_button" type="checkbox">
            <input id="eye_button" class="eye_button" type="checkbox">
            <input id="re-eye_button" class="eye_button" type="checkbox">
            <form action="resetting.php" method="post">
                <h1>パスワード変更</h1>
                <?php
                if(isset($_SESSION['msg'])){
                    echo '<div class="error_msg">';
                    echo '<p>';
                    echo $_SESSION['msg'];
                    echo '</p>';
                    echo '</div>';
                }
                // 後片付け
                unset($_SESSION['msg']);
                ?>
                <div class="input_field">
                    <input id="old-password" type="password" name="oldpasswd" placeholder="現在のパスワード" required>
                    <label for="old-eye_button"><i id="old-pass_eye" class="pass_eye material-icons">visibility</i></label>
                </div>
                <div class="input_field">
                    <input id="password" type="password" name="passwd" placeholder="新しいパスワード" required>
                    <label for="eye_button"><i id="pass_eye" class="pass_eye material-icons">visibility</i></label>
                </div>
                <div class="input_field">
                    <input id="re-password" type="password" name="repasswd" placeholder="新しいパスワードを再入力" required>
                    <label for="re-eye_button"><i id="re-pass_eye" class="pass_eye material-icons">visibility</i></label>
                </div>
                <div class="button_field">
                    <input type="submit" value="変更">
                </div>
            </form>
        </main>
    </div>
    <footer>
        <div id="cmark">&copy; 2022 National Institute of Technology Kushiro College Programming Circle, All rights reserved. </div>
    </footer>

    <!-- Java Script -->
    <script src="js/headerNavi.js"></script>
    <script src="js/passEye.js"></script>
</body>
</html>