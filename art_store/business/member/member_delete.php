<!DOCTYPE html>
<?php
include("connMysql.php");
if (!@mysqli_select_db($db_link, "final")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="刪除")){
	$sql_query = "DELETE FROM `member` WHERE `id`=".$_POST["id"];
	mysqli_query($db_link, $sql_query);
	//重新導向回到主畫面
	header("Location: member.php");
}
$sql_db = "SELECT * FROM `member` WHERE `id`=".$_GET["id"];
$result = mysqli_query($db_link, $sql_db);
$row_result=mysqli_fetch_assoc($result);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>member delete</title>
	<link rel="stylesheet" type="text/css" href="../../css/b_modify.css">
</head>
<body>
	<div id ="modify_data">
		<p>&nbsp&nbsp&nbsp刪除會員資料</p>
		<a href="member.php">會員資料</a>
			<form action="" method="POST" name="formDel" id="formDel">
			  &nbsp&nbsp&nbsp&nbsp&nbsp姓名：<?php echo $row_result["name"];?>
				<br>
				<br>
				&nbsp&nbsp&nbsp&nbsp&nbsp生日：<?php echo $row_result["birthday"];?><br>
				<br>
				&nbsp&nbsp&nbsp&nbsp&nbsp帳號：<?php echo $row_result["account"];?><br>
				<br>
				&nbsp&nbsp&nbsp&nbsp&nbsp密碼：<?php echo $row_result["password"];?><br>
				<br>
				&nbsp&nbsp&nbsp&nbsp&nbsp性別：
				<?php
			      if($row_result["sex"]=="male"){
			        echo "male";
			      }
						else{
			        echo "female";
			      }
			  ?>
				<br>
				<br>
				&nbsp&nbsp&nbsp&nbsp&nbspEmail：<?php echo $row_result["email"];?>
				<br>
				<br>
				&nbsp&nbsp&nbsp&nbsp&nbsp電話：<?php echo $row_result["phone"];?>
				<br>
				<br>
				&nbsp&nbsp&nbsp&nbsp&nbsp地址：<?php echo $row_result["address"];?>
				<br>
				<br>
			  <input name="id" type="hidden" value="<?php echo $row_result["id"];?>">
			  <input name="action" type="hidden" value="刪除">
			  <input id="modify" type="submit" name="button" value="刪除">
			</form>
		</div>
	</body>
</html>
