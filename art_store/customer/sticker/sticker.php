<!DOCTYPE html>
<?php
$_DB_HOST = "localhost";
$_DB_ID = "root";
$_DB_PASS = "rootroot";
$_DB_NAME = "final";
session_start();

if (isset($_POST['sticker01']) and $_POST['sticker01'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','sticker01')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: sticker.php");

}
if (isset($_POST['sticker02']) and $_POST['sticker02'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','sticker02')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: sticker.php");

}
?>
<html>
	<head>
		<meta charset = "utf-8">
		<title>貼紙</title>
		<link rel="stylesheet" type="text/css" href="../type.css"/>
	</head>
	<header>
		<div class="banner">
			<div class="coverflow">

				<a href="#"><img src="../picture/banner1.jpg"></a>
				<a href="#"><img src="../picture/banner2.jpg"></a>
				<a href="#"><img src="../picture/banner3.jpg"></a>
			</div>
		</div>

	</header>
	<body>
		<br>
		<div id="Sidebar-left" style="padding-left: 20px;">
			<h3><a href="../Home/Welcome.php" target="_blank">Home</a></h3>
			<h3><a href="../all_card/all_card.php" target="_blank" id="text">卡片</a></h3>
			<ul>
				<li><a href="../kind_a/kind_a.php" target="_blank" id="text">日風</a></li>
				<li><a href="../kind_b/kind_b.php" target="_blank" id="text">歐美</a></li>
				<li><a href="../kind_c/kind_c.php" target="_blank" id="text">民國</a></li>
			</ul>
			<h3><a href="../sticker/sticker.php" target="_blank" id="text">貼紙</a></h3>
			<h3><a href="../MT/MT.php" target="_blank" id="text">紙膠帶</a></h3>
		
		
		
		
		</div>

		<br>
		<br>
		<br>
		<div style="position: fixed;bottom:0;right:0;width: 120px" >
			<p style="color: white;margin: 0px auto">每件售價<br>皆 50 元</p>
			<a href="../cart.php" style="width: 100%"><img src="../picture/cart.png" style="width: 85%"><br>購物車</a>

		</div>

		<div id="Content" style="width: 60%">
			<div id="item" style="float: left;">
				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/sticker01.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="sticker01" value="add to cart" type="sticker01" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="sticker01" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				<br>
				<br>
			</div>
			<div id="item" style="float: left;">
				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/sticker02.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="sticker02" value="add to cart" type="sticker02" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="sticker02" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				<br>
				<br>
			</div>
			
		</div>
	</body>
</html>
