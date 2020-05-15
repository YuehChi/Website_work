<!DOCTYPE html>
<?php
$_DB_HOST = "localhost";
$_DB_ID = "root";
$_DB_PASS = "rootroot";
$_DB_NAME = "final";
if (isset($_POST['action']) and $_POST['action'] == "註冊") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
        die('無法連上資料庫：' . $db->connect_error);
    }
    $db->set_charset("utf8");
    $name   = $db->real_escape_string($_POST['name']);
    $account = $db->real_escape_string($_POST['account']);
    $password   = $db->real_escape_string($_POST['password']);
    $sex =$db->real_escape_string($_POST['sex']);
    $email   = $db->real_escape_string($_POST['email']);
	$phone = $db->real_escape_string($_POST['phone']);
	$birthday = $db->real_escape_string($_POST['birthday']);
	$address = $db->real_escape_string($_POST['address']);
    $sql     = "INSERT INTO `member` (`name` ,`account` ,`password` ,`sex`,`email` ,`phone`,`address`,`birthday`) VALUES('{$name}', '{$account}','{$password}','{$sex}','{$email}','{$phone}','{$address}','{$birthday}')";
	$db->query($sql) or die($db->error . $sql);
    $sn = $db->insert_id;
	header("location:index.php");//請你們決定註冊完要前往哪個頁面
  }
?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body>
  <div id ="register">
    <p>&nbsp&nbsp&nbsp註冊</p>
    <br>
    <form action="" method="post" name="formAdd">
      &nbsp&nbsp&nbsp&nbsp姓名：<input type="text" name="name">
      <br>
      <br>
      &nbsp&nbsp&nbsp&nbsp帳號：<input type="text" name="account">
      <br>
      <br>
      &nbsp&nbsp&nbsp&nbsp密碼：<input type="password" name="password">
      <br>
      <br>
      &nbsp&nbsp&nbsp&nbsp性別：<input type="radio" name="sex" value="male" checked> 男
        <input type="radio" name="sex" value="female"> 女
      <br>
      <br>
      &nbsp&nbsp&nbsp&nbsp生日：<input type="text" name="birthday">
      <br>
      <br>
      &nbsp&nbsp&nbsp&nbsp信箱：<input type="text" name="email">
      <br>
      <br>
      &nbsp&nbsp&nbsp&nbsp手機號碼：<input type="text" name="phone">
      <br>
      <br>
      &nbsp&nbsp&nbsp&nbsp地址：<input type="text" name="address">
      <br>
      <br>
      <input name="action" type="submit" value="註冊" hidden="hidden">
      <input id = "accept" type="submit" name="action"  value="註冊">
      <input id = "cancel" type="reset" name="button2" value="重新填寫" >
    </form>
   </div>
</body>
</html>
