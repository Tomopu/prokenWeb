<?php
ini_set('display_errors', 'On');
$dsn = "mysql:host=mydb; dbname=members; charset=utf8";
$username = "admin";
$password = "hogehoge";
try {
    $dbh = new PDO($dsn, $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    $msg = $e->getMessage();
}
?>