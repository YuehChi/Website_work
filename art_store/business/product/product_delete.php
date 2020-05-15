<!DOCTYPE html>
<?php
include("connMysql.php");
if (!@mysqli_select_db($db_link, "final")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="delete")){
	$sql_query = "DELETE FROM `product` WHERE `pno`='".$_POST["pno"]."'";
	mysqli_query($db_link, $sql_query);
	//重新導向回到主畫面
	header("Location: product.php");
}
$sql_db = "SELECT * FROM `product` WHERE `pno`='".$_GET["id"]."'";
$result = mysqli_query($db_link, $sql_db);
$row_result=mysqli_fetch_assoc($result);
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>product delete</title>
		<link rel="stylesheet" type="text/css" href="../../css/b_modify.css">
	</head>
	<body>
		<div id ="modify_data">
      <p>&nbsp&nbsp&nbsp刪除商品</p>
      <a href="product.php">商品資料</a>
			<form action="" method="POST" name="formDel" id="formDel">
	      &nbsp&nbsp&nbsp&nbsp&nbsp商品編號：<?php echo $row_result["pno"];?>
				<br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp商品名：</td><td><?php echo $row_result["pname"];?>
				<br>
	      <br>
	      &nbsp&nbsp&nbsp&nbsp&nbsp價錢：<?php echo $row_result["price"];?></td>
				<br>
				<br>
				&nbsp&nbsp&nbsp&nbsp&nbsp分類：<?php echo $row_result["catelog"];?>
				<br>
        <br>
	      <input name="pno" type="hidden" value="<?php echo $row_result["pno"];?>">
	      <input name="action" type="hidden" value="delete">
	      <input id="modify" type="submit" name="button" value="delete">
			</form>
		</div>
	</body>
</html>
