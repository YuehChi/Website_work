<!DOCTYPE html>
<?php
include("connMysql.php");
if (!@mysqli_select_db($db_link, "final")) die("資料庫選擇失敗！");
//mysql update use in php
if(isset($_POST["update"])&&($_POST["update"]=="修改")){
  $sql_query = "UPDATE `order` SET `id`='".$_POST["id"]."',"."`amount`='".$_POST["amount"]."',"."`pno`='".$_POST["pno"]."'"."WHERE `oid`= '".$_POST["oid"]."'";
  mysqli_query($db_link, $sql_query);
  //重新導向回到主畫面
  header("Location: order.php");
}
//set the data previously
$sql_db = "SELECT * FROM `order` WHERE `oid`= '".$_GET["id"]."'";
$result = mysqli_query($db_link, $sql_db);
$row_result=mysqli_fetch_assoc($result);
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>order update</title>
    <link rel="stylesheet" type="text/css" href="../../css/b_modify.css">
  </head>
  <body>
    <div id ="modify_data">
      <p>&nbsp&nbsp&nbsp修改訂單</p>
      <a href="order.php">訂單資料</a>
      <form action="" method="POST" name="formFix" id="formFix">
        &nbsp&nbsp&nbsp&nbsp&nbsp帳號：<input type="text" name="id" value="<?php echo $row_result["id"];?>">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp數量：<input type="text" name="amount" value="<?php echo $row_result["amount"];?>">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp商品編號：<input type="text" name="pno" value="<?php echo $row_result["pno"];?>">
        <br>
        <br>
        <input name="oid" type="hidden" value="<?php echo $row_result["oid"];?>">
        <input name="update" type="hidden" value="修改">
        <input id = "modify" type="submit" name="update" value="修改">
        <input id = "re" type="reset" name="button" value="重設">
      </form>
    </div>
  </body>
</html>
