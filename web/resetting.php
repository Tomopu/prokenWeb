<?php
session_start();
if(isset($_SESSION['userid'])){
    $oldpasswd = htmlspecialchars($_POST['oldpasswd'], ENT_QUOTES, "UTF-8");
    $passwd = htmlspecialchars($_POST['passwd'], ENT_QUOTES, "UTF-8");
    $repassed = htmlspecialchars($_POST['repasswd'], ENT_QUOTES, "UTF-8");
    $userid = $_SESSION['userid'];

    //　データベースへの接続
    require("dbconnect.php");

    $sql = "SELECT * FROM members_table WHERE userid = :userid";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':userid', $userid, PDO::PARAM_STR);
    $stmt->execute();
    $member = $stmt->fetch();

    if($member['passwd'] != $oldpasswd){
        // 現在のパスワードが一致しない場合
        $msg = '現在のパスワードが間違っています。';
        $_SESSION['msg'] = $msg;
        header('Location:resetting_form.php');
    } else if($passwd != $repassed) {
        // 新しいパスワードが再入力と一致しない場合
        $msg = '再入力のパスワードが一致しません。';
        $_SESSION['msg'] = $msg;
        header('Location:resetting_form.php');
    } else {
        // パスワードを変更する
        $sql = "UPDATE members_table SET passwd = :passwd WHERE userid = :userid";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':userid', $userid, PDO::PARAM_STR);
        $stmt->bindValue(':passwd', $passwd, PDO::PARAM_STR);
        $stmt->execute();
        $_SESSION = array();  // セッションの中身を削除
        $_SESSION['success_msg'] = 'パスワードを変更しました。ログインし直してください。';
        header('Location:login_form.php');
    }
}else{
    header('Location:resetting_form.php');
}
?>

