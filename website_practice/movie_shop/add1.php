<!DOCTYPE html>
<?php 
$_DB_HOST = "localhost";
$_DB_ID = "root";
$_DB_PASS = "rootroot";
$_DB_NAME = "movie_shop";
if (isset($_POST['action']) and $_POST['action'] == "insert") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
        die('無法連上資料庫：' . $db->connect_error);
    }
    $db->set_charset("utf8");
    $name   = $db->real_escape_string($_POST['cName']);
    $sex = $db->real_escape_string($_POST['cSex']);
    $birth   = $db->real_escape_string($_POST['cBirthday']);
    $email = $db->real_escape_string($_POST['cEmail']);
    $phone   = $db->real_escape_string($_POST['cPhone']);
    $add = $db->real_escape_string($_POST['cAddr']);
    $sql     = "INSERT INTO `member` (`cName` ,`cSex` ,`cBirthday` ,`cEmail` ,`cPhone` ,`cAddr`) VALUES('{$name}', '{$sex}','{$birth}','{$email}','{$phone}','{$add}')";
    $db->query($sql) or die($db->error . $sql);
    $sn = $db->insert_id;
    header("location: index.php");
  }
  
?>
<html>
<head>
	<meta charset="utf-8">
	<title>動畫電影產品訂購</title>
</head>
<body>
<h1 align="center">會員訂單管理系統 - 新增資料</h1>
<p align="center"><a href="index.php">回主畫面</a></p>
<form action="" method="post" name="formAdd" id="formAdd">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>姓名</td><td><input type="text" name="cName" id="cName"></td>
    </tr>
    <tr>
      <td>性別</td><td>
      <input type="radio" name="cSex" id="radio" value="M" checked>男
      <input type="radio" name="cSex" id="radio" value="F">女
      </td>
    </tr>
    <tr>
      <td>生日</td><td><input type="text" name="cBirthday" id="cBirthday"></td>
    </tr>
    <tr>
      <td>電子郵件</td><td><input type="text" name="cEmail" id="cEmail"></td>
    </tr>
    <tr>
      <td>電話</td><td><input type="text" name="cPhone" id="cPhone"></td>
    </tr>
    <tr>
      <td>住址</td><td><input name="cAddr" type="text" id="cAddr" size="40"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="action" type="submit" value="insert" hidden="hidden">
      <input type="submit" name="action"  value="insert">
      <input type="reset" name="button2" value="重新填寫" >
      </td>
    </tr>
  </table>
</form>
</body>
</html>