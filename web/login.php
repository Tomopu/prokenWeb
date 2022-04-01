<?php
session_start();
// セッションIDを再設定(セッションハイジャック対策)
session_regenerate_id(true);

$userid = htmlspecialchars($_POST['userid'], ENT_QUOTES, "UTF-8");
//　データベースへの接続
require("dbconnect.php");

$sql = "SELECT * FROM members_table WHERE userid = :userid";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':userid', $userid, PDO::PARAM_STR);
$stmt->execute();
$member = $stmt->fetch();

if(htmlspecialchars($_POST['passwd'], ENT_QUOTES, "UTF-8") == $member['passwd']){
    $_SESSION['userid'] = $member['userid'];
    $_SESSION['permit'] = $member['permit'];
    header('Location:index.php');
} else {
    $msg = 'メールアドレスもしくはパスワードが間違っています。';
    $_SESSION['msg'] = $msg;
    header('Location:login_form.php');
    exit();
}
?>