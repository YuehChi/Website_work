<!DOCTYPE html>
<?php
include("connMysql.php");
if (!@mysqli_select_db($db_link, "final")) die("資料庫選擇失敗！");
//mysql update use in php
if(isset($_POST["update"])&&($_POST["update"]=="修改")){
  $sql_query = "UPDATE `product` SET `pname`='".$_POST["pname"]."',"."`price`='".$_POST["price"]."',"."`catelog`='".$_POST["catelog"]."'"."WHERE `pno`= '".$_POST["pno"]."'";
  mysqli_query($db_link, $sql_query);
  //重新導向回到主畫面
  header("Location: product.php");
}
//set the data previously
$sql_db = "SELECT * FROM `product` WHERE `pno`= '".$_GET["id"]."'";
$result = mysqli_query($db_link, $sql_db);
$row_result=mysqli_fetch_assoc($result);
?>
<html>
  <head>
  	<meta charset="utf-8">
  	<title>member update</title>
    <link rel="stylesheet" type="text/css" href="../../css/b_modify.css">
  </head>
  <body>
    <div id ="modify_data">
      <p>&nbsp&nbsp&nbsp修改商品資訊</p>
      <a href="product.php">商品資料</a>
      <form action="" method="POST" name="formFix" id="formFix">
        &nbsp&nbsp&nbsp&nbsp&nbsp商品名：<input type="text" name="pname" id="pname" value="<?php echo $row_result["pname"];?>">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp價錢：<input type="text" name="price" id="price" value="<?php echo $row_result["price"];?>"><br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp分類：<input type="text" name="catelog" id="catelog" value="<?php echo $row_result["catelog"];?>">
        <br>
        <br>
        <input name="pno" type="hidden" value="<?php echo $row_result["pno"];?>">
        <input name="update" type="hidden" value="修改">
        <input id = "modify" type="submit" name="update" value="修改">
        <input id = "re" type="reset" name="button" value="重設">
      </form>
    </div>
  </body>
</html>
