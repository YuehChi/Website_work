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
    $pno = $db->real_escape_string($_POST['pno']);
    $pname = $db->real_escape_string($_POST['pname']);
    $price = $db->real_escape_string($_POST['price']);
    $catelog = $db->real_escape_string($_POST['catelog']);


    $sql    =     "INSERT INTO `product` (`pno`,`pname` ,`price` ,`catelog`) VALUES('{$pno}','{$pname}','{$price}','{$catelog}')";
    $db->query($sql) or die($db->error . $sql);
    $sn = $db->insert_id;
    header("location: product.php");
}

?>
<html>
  <head>
  	<meta charset="utf-8">
  	<title>product add</title>
    <link rel="stylesheet" type="text/css" href="../../css/b_modify.css">
  </head>
  <body>
    <div id ="modify_data">
      <p>&nbsp&nbsp&nbsp新增商品</p>
      <a href="product.php">商品資料</a>
      <form action="" method="post" name="formAdd" id="formAdd">
        &nbsp&nbsp&nbsp&nbsp&nbsp商品編號：<input type="text" name="pno" id="pno">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp商品名：<input type="text" name="pname" id="pname">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp價錢：<input type="text" name="price" id="price">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp分類：<input type="text" name="catelog" id="catelog">
        <br>
        <br>
        <input name="action" value="新增" type="submit" hidden="hidden">
        <input id = "modify" type="submit" name="action" value="新增">
        <input id = "re" type="reset" name="button2" value="清除">
      </form>
    </div>
  </body>
</html>
