<!DOCTYPE html>
<?php
  $_DB_HOST = "localhost";
  $_DB_ID = "root";
  $_DB_PASS = "rootroot";
  $_DB_NAME = "final";
  if (isset($_POST['action']) and $_POST['action'] == "新增") {
    $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
    if ($db->connect_error) {
      die('無法連上資料庫：' . $db->connect_error);
    }
    $db->set_charset("utf8");
    $name   = $db->real_escape_string($_POST['name']);
    $birth   = $db->real_escape_string($_POST['birthday']);
    $account   = $db->real_escape_string($_POST['account']);
    $password   = $db->real_escape_string($_POST['password']);
    $sex = $db->real_escape_string($_POST['sex']);
    $email = $db->real_escape_string($_POST['email']);
    $phone   = $db->real_escape_string($_POST['phone']);
    $add = $db->real_escape_string($_POST['address']);
    $sql    =     "INSERT INTO `member` (`name` ,`birthday` ,`account` ,`password` ,`sex` ,`email`,`phone`, `address`) VALUES('{$name}','{$birth}','{$account}','{$password}', '{$sex}','{$email}','{$phone}','{$add}')";
    $db->query($sql) or die($db->error . $sql);
    $sn = $db->insert_id;
    header("location: member.php");
}

?>
<html>
<head>
	<meta charset="utf-8">
	<title>member add</title>
  <link rel="stylesheet" type="text/css" href="../../css/b_modify.css">
</head>
<body>
  <div id ="modify_data">
    <p>&nbsp&nbsp&nbsp新增會員資料</p>
    <a href="member.php">會員資料</a>
    <form action="" method="post" name="formAdd" id="formAdd">
      &nbsp&nbsp&nbsp&nbsp姓名：<input type="text" name="name" id="name">
      <br>
      <br>
      &nbsp&nbsp&nbsp&nbsp生日：<input type="text" name="birthday" id="birthday" placeholder="0000-00-00" >
      <br>
      <br>
      &nbsp&nbsp&nbsp&nbsp帳號：<input type="text" name="account" id="account">
      <br>
      <br>
      &nbsp&nbsp&nbsp&nbsp密碼：<input type="text" name="password" id="password">
      <br>
      <br>
      &nbsp&nbsp&nbsp&nbsp性別：<input type="radio" name="sex" id="radio" value="male" checked>男
        <input type="radio" name="sex" id="radio" value="female">女
      <br>
      <br>
      &nbsp&nbsp&nbsp&nbspEmail：</td><td><input type="text" name="email" id="email">
      <br>
      <br>
      &nbsp&nbsp&nbsp&nbsp電話：<input type="text" name="phone" id="phone">
      <br>
      <br>
      &nbsp&nbsp&nbsp&nbsp地址：<input name="address" type="text" id="address" size="40">
      <br>
      <br>
      <input name="action" value="新增" type="submit" hidden="hidden">
      <input id = "modify" type="submit" name="action" value="新增" class="add">
      <input id = "re" type="reset" name="button2" value="清除" class="add">
    </form>
  </div>
  </body>
</html>
