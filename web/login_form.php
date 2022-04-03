<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=2">
    <!-- css -->
    <link rel="stylesheet" href="css/login_form.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <title>ログイン</title>
</head>
<body>
    <!-- パスワードを表示するためのチェックボックス　-->
    <input id="eye_button" type="checkbox">
    <form action="login.php" method="post">
        <h1>Log in</h1>
        <?php
        if(isset($_SESSION['success_msg'])){
            echo '<div class="success_msg">';
            echo '<p>';
            echo $_SESSION['success_msg'];
            echo '</p>';
            echo '</div>';
        }
        if(isset($_SESSION['msg'])){
            echo '<div class="error_msg">';
            echo '<p>';
            echo $_SESSION['msg'];
            echo '</p>';
            echo '</div>';
        }
        // 後片付け
        unset($_SESSION['msg']);
        unset($_SESSION['success_msg']);
        ?>
        <div class="input_field">
            <input type="text" name="userid" placeholder="ユーザーID" required>
        </div>
        <div class="input_field">
            <input id="password" type="password" name="passwd" placeholder="パスワード" required>
            <label for="eye_button"><i id="pass_eye" class="material-icons">visibility</i></label>
        </div>
        <div class="button_field">
            <input type="submit" value="ログイン">
        </div>
        
    </form>
    
    <footer>
        <div id="cmark">&copy; 2022 National Institute of Technology Kushiro College Programming Circle, All rights reserved. </div>
    </footer>

    <!-- Java Script -->
    <script src="js/passEye.js"></script>
</body>
</html>
