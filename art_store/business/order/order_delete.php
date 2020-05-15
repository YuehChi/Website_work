<!DOCTYPE html>
<?php
include("connMysql.php");
if (!@mysqli_select_db($db_link, "final")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="delete")){
	$sql_query = "DELETE FROM `order` WHERE `oid`='".$_POST["oid"]."'";
	mysqli_query($db_link, $sql_query);
	//重新導向回到主畫面
	header("Location: order.php");
}
$sql_db = "SELECT * FROM `order` WHERE `oid`='".$_GET["id"]."'";
$result = mysqli_query($db_link, $sql_db);
$row_result=mysqli_fetch_assoc($result);
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>order delete</title>
		<link rel="stylesheet" type="text/css" href="../../css/b_modify.css">
	</head>
	<body>
		<div id ="modify_data">
      <p>&nbsp&nbsp&nbsp刪除訂單</p>
      <a href="order.php">訂單資料</a>
			<form action="" method="POST" name="formDel" id="formDel">
				&nbsp&nbsp&nbsp&nbsp&nbsp訂單編號：<?php echo $row_result["cno"];?>
				<br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp帳號：</td><td><?php echo $row_result["id"];?>
					<br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp數量：<?php echo $row_result["amount"];?>
				<br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp商品編號：<?php echo $row_result["pno"];?>
				<br>
        <br>
      	<input name="oid" type="hidden" value="<?php echo $row_result["oid"];?>">
      	<input name="action" type="hidden" value="delete">
      	<input id="modify" type="submit" name="button" value="delete">
			</form>
		</div>
	</body>
</html>
