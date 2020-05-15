<!DOCTYPE html>
<?php
session_start();
$_DB_HOST = "localhost";
$_DB_ID = "root";
$_DB_PASS = "rootroot";
$_DB_NAME = "final";

if (isset($_POST['action']) and $_POST['action'] == "登入") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
  $account = $_POST['account'];
  $password = $_POST['password'];
  $sql = "SELECT*FROM member WHERE account='$account' AND password='$password'" ;
  $sql2 = $db->query($sql);
  if(mysqli_num_rows($sql2) == ""){
    echo "<script>alert('無此帳號或密碼錯誤');</script>";
 }
  else{
    header('Location:./Home/Welcome.php');
    $_SESSION["account"] = $account;
 }
}

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>customer login</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
  </head>
  <body>
    <div id = "login">
      <form method="post" action="" id='login_action' name='login_action'>
        <br>
        <p>&nbsp&nbsp&nbsp會員登入</p>
        <a href="register.php">加入會員</a>
        <br>
        &nbsp&nbsp&nbsp&nbsp帳號 : <input type="text" name="account" id="account"/>
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp密碼 : <input type="password" name="password" id="password"/>
        <br>
        <br>
        <input id = "cancel" type="reset" value="清除" />
        <input name="action" type="submit" value="登入" hidden="hidden">
        <input id = "accept" type="submit" name="action"  value="登入" ">
    </div>
  </body>
</html>
