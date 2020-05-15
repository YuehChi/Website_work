<!DOCTYPE html>
<?php 
include("connMysql1.php");
if (!@mysqli_select_db($db_link, "movie_shop")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="delete")){	
	$sql_query = "DELETE FROM `member` WHERE `cID`=".$_POST["cID"];
	mysqli_query($db_link, $sql_query);
	//重新導向回到主畫面
	header("Location: index.php");
}
$sql_db = "SELECT * FROM `member` WHERE `cID`=".$_GET["id"];
$result = mysqli_query($db_link, $sql_db);
$row_result=mysqli_fetch_assoc($result);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>動畫電影產品訂購</title>
</head>
<body>
<h1 align="center">會員訂單管理系統 - 刪除資料</h1>
<p align="center"><a href="index.php">回主畫面</a></p>
<form action="" method="post" name="formDel" id="formDel">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>姓名</td><td><?php echo $row_result["cName"];?></td>
    </tr>
    <tr>
      <td>性別</td><td>
      <?php
      	if($row_result["cSex"]=="M"){
      		echo "男";
      	}else{
      		echo "女";
      	}
   	  ?>
      </td>
    </tr>
    <tr>
      <td>生日</td><td><?php echo $row_result["cBirthday"];?></td>
    </tr>
    <tr>
      <td>電子郵件</td><td><?php echo $row_result["cEmail"];?></td>
    </tr>
    <tr>
      <td>電話</td><td><?php echo $row_result["cPhone"];?></td>
    </tr>
    <tr>
      <td>住址</td><td><?php echo $row_result["cAddr"];?></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="cID" type="hidden" value="<?php echo $row_result["cID"];?>">
      <input name="action" type="hidden" value="delete">
      <input type="submit" name="button" id="button" value="確定刪除這筆資料嗎？">
      </td>
    </tr>
  </table>
</form>
</body>
</html>