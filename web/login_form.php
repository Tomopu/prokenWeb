
<h1>ログインページ</h1>
<form action="login.php" method="post">
    <div>
        <label>USER ID:</label>
        <input type="text" name="userid" required>
    </div>
    <div>
	<label>PASSWORD:</label>
        <input type="password" name="passwd" required>
    </div>
    <input type="submit" value="ログイン">
</form>
<?php
if(isset($_GET['msg'])){
    echo '<p style="color:red">';
    echo $_GET['msg'];
    echo '</p>';
}
?>
<p><a href="signup.php">新規登録</a></p>
