<!DOCTYPE html>
<?php
$_DB_HOST = "localhost";
$_DB_ID = "root";
$_DB_PASS = "rootroot";
$_DB_NAME = "final";

if (isset($_POST['action']) and $_POST['action'] == "登入") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  $account = $_POST['account'];
  $password = $_POST['password'];
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
  if($account == $_DB_ID  && $password == $_DB_PASS){
     header('Location:content.php');
  }
  if($account == '' || $password ==''){
    echo "<script>alert('請輸入帳號密碼...');</script>";
  }
  else{
    echo "<script>alert('帳號或密碼錯誤!!');</script>";
  }
}

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>business login</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    </head>
    <body>
    <div id = "login">
      <form method="post" action="">
        <br>
        <p>&nbsp&nbsp&nbsp管理者登入</p>
        <br>
        &nbsp&nbsp&nbsp帳號 : <input type="text" name="account"/>
        <br>
        <br>
        &nbsp&nbsp&nbsp密碼 : <input type="text" name="password"/>
        <br>
        <br>
        <input id = "cancel" type="reset" value="清除" />
        <input name="action" type="submit" value="登入" hidden="hidden">
        <input id = "accept" type="submit" name="action"  value="登入">
    </div>
    </body>
    </body>
    </html>
  </head>
  <body>
    <div id = "login">
      <form method="post" action="">
        <br>
        <p>&nbsp&nbsp&nbsp管理者登入</p>
        <br>
        &nbsp&nbsp&nbsp&nbsp帳號 : <input type="text" name="account"/>
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp密碼 : <input type="text" name="password"/>
        <br>
        <br>
        <input id = "cancel" type="reset" value="清除" />
        <input name="action" type="submit" value="登入" hidden="hidden">
        <input id = "accept" type="submit" name="action"  value="登入">
    </div>
  </body>
  </body>
</html>
