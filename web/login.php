<?php
session_start();
$userid = $_POST['userid'];
//　データベースへの接続
require("dbconnect.php");

$sql = "SELECT * FROM members_table WHERE userid = :userid";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':userid', $userid, PDO::PARAM_STR);
$stmt->execute();
$member = $stmt->fetch();

if($_POST['passwd'] == $member['passwd']){
    $_SESSION['userid'] = $member['userid'];
    header('Location:index.html');
} else {
    $msg = 'メールアドレスもしくはパスワードが間違っています。';
    header('Location:login_form.php?msg='. $msg);
    exit();
}
?>