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
    $cno = $db->real_escape_string($_POST['cno']);
    $id = $db->real_escape_string($_POST['id']);
    $amount = $db->real_escape_string($_POST['amount']);
    $pno = $db->real_escape_string($_POST['pno']);


    $sql = "INSERT INTO `order` (`cno`,`id`,`amount`,`pno`) VALUES('{$cno}','{$id}','{$amount}','{$pno}')";
    $db->query($sql) or die($db->error . $sql);
    $sn = $db->insert_id;
    header("location: order.php");
}

?>
<html>
  <head>
  	<meta charset="utf-8">
  	<title>order add</title>
    <link rel="stylesheet" type="text/css" href="../../css/b_modify.css">
  </head>
  <body>
    <div id ="modify_data">
      <p>&nbsp&nbsp&nbsp新增訂單</p>
      <a href="order.php">訂單資料</a>
      <form action="" method="post" name="formAdd" id="formAdd">
        &nbsp&nbsp&nbsp&nbsp&nbsp訂單標號：<input type="text" name="cno">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp帳號：<input type="text" name="id">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp數量：<input type="text" name="amount">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp商品編號：<input type="text" name="pno">
        <br>
        <br>
        <input name="action" value="新增" type="submit" hidden="hidden">
        <input id = "modify" type="submit" name="action" value="新增">
        <input id = "re" type="reset" name="button2" value="清除">
      </form>
    </div>
  </body>
</html>
