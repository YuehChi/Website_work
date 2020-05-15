<!DOCTYPE html>
<?php
$_DB_HOST = "localhost";
$_DB_ID = "root";
$_DB_PASS = "rootroot";
$_DB_NAME = "final";
session_start();

	if (isset($_POST['card03']) and $_POST['card03'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card03')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: kind_b.php");

}
if (isset($_POST['card05']) and $_POST['card05'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card05')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: kind_b.php");

}
if (isset($_POST['card07']) and $_POST['card07'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card07')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: kind_b.php");

}
if (isset($_POST['card08']) and $_POST['card08'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card08')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: kind_b.php");

}
if (isset($_POST['card09']) and $_POST['card09'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card09')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: kind_b.php");

}
if (isset($_POST['card13']) and $_POST['card13'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card13')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: kind_b.php");

}
if (isset($_POST['card14']) and $_POST['card14'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card14')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: kind_b.php");

}
?>
<html>
	<head>
		<meta charset = "utf-8">
		<title>歐美風格卡片</title>
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
			<h3><a href="../Home/Welcome.php" target="_blank" >Home</a></h3>
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
		<div style="position: fixed;bottom:0;right:0;width: 120px" >
			<p style="color: white;margin: 0px auto">每件售價<br>皆 50 元</p>
			<a href="../cart.php" style="width: 100%"><img src="../picture/cart.png" style="width: 85%"><br>購物車</a>

		</div>

		<div id="Content" style="width: 60%">
			<div id="item" style="float: left;">

				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/card03.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="card03" value="add to cart" type="card03" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card03" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				
			</div>
			<div id="item" style="float: left;">

				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/card05.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="card05" value="add to cart" type="card05" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card05" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				
			</div>
			<div id="item" style="float: left;">

				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/card07.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="card07" value="add to cart" type="card07" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card07" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				
			</div>
			<div id="item" style="float: left;">

				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/card08.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="card08" value="add to cart" type="card08" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card08" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				
			</div>

			<div id="item" style="float: left;">

				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/card08.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="card08" value="add to cart" type="card08" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card08" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				
			</div>
			<div id="item" style="float: left;">

				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/card13.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="card13" value="add to cart" type="card13" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card13" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				
			</div>
			<div id="item" style="float: left;">

				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/card14.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="card14" value="add to cart" type="card14" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card14" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				
			</div>
		</div>
	</body>
</html>
