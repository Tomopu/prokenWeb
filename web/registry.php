<?php
session_start();

if(isset($_POST['userid']) && isset($_POST['passwd']) && isset($_POST['repasswd'])){
    $userid = htmlspecialchars($_POST['userid'], ENT_QUOTES, "UTF-8");
    $passwd = htmlspecialchars($_POST['passwd'], ENT_QUOTES, "UTF-8");
    $repasswd = htmlspecialchars($_POST['repasswd'], ENT_QUOTES, "UTF-8");

    //　データベースへの接続
    require("dbconnect.php");

    $sql = "SELECT * FROM members_table WHERE userid = :userid";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':userid', $userid, PDO::PARAM_STR);
    $stmt->execute();
    $member = $stmt->fetch();

    // USER　IDが既に登録されていないかの確認
    if($member['userid'] == $userid){
        $msg = '同じユーザーIDが存在します。';
        $_SESSION['msg'] = $msg;
        header('Location:registry_form.php');

    } else if($passwd == $repasswd) {
        // 同じユーザーIDがなく、パスワードが一致していれば登録
        $permit = htmlspecialchars($_POST['permit'], ENT_QUOTES, "UTF-8");

        $sql = "INSERT INTO members_table VALUES(:userid, :passwd, :permit)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':userid', $userid, PDO::PARAM_STR);
        $stmt->bindValue(':passwd', $passwd, PDO::PARAM_STR);
        $stmt->bindValue(':permit', $permit, PDO::PARAM_INT);
        $stmt->execute();
        $msg = 'アカウント登録が完了しました。';
        $link = '<a href="index.php">戻る</a>';
    } else {
        // パスワードが一致しない場合
        $msg = '再入力のパスワードが一致しません。';
        $_SESSION['msg'] = $msg;
        header('Location:registry_form.php');
    }
} else {
    $msg = 'ユーザーIDまたはパスワードが入力されていません。';
    $_SESSION['msg'] = $msg;
    header('Location:registry_form.php');
}
?>

<p><?php echo $msg; ?><p>
<p><?php echo $link; ?></p>

