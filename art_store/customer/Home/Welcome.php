<!DOCTYPE html>
<?php
$_DB_HOST = "localhost";
$_DB_ID = "root";
$_DB_PASS = "rootroot";
$_DB_NAME = "final";
session_start();

if (isset($_POST['card01']) and $_POST['card01'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card01')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: Welcome.php");
}
if (isset($_POST['card02']) and $_POST['card02'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card02')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: Welcome.php");

}
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
 header("location: Welcome.php");

}
if (isset($_POST['card04']) and $_POST['card04'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card04')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: Welcome.php");

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
 header("location: Welcome.php");

}
if (isset($_POST['card06']) and $_POST['card06'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card06')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: Welcome.php");

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
 header("location: Welcome.php");

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
 header("location: Welcome.php");

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
 header("location: Welcome.php");

}
if (isset($_POST['card10']) and $_POST['card10'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card10')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: Welcome.php");

}
if (isset($_POST['card11']) and $_POST['card11'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card011')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: Welcome.php");

}
if (isset($_POST['card12']) and $_POST['card12'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card12')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: Welcome.php");

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
 header("location: Welcome.php");

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
 header("location: Welcome.php");

}
if (isset($_POST['card15']) and $_POST['card15'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','card15')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: Welcome.php");

}
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
 header("location: Welcome.php");

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
 header("location: Welcome.php");

}
if (isset($_POST['MT01']) and $_POST['MT01'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','MT01')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: Welcome.php");

}
if (isset($_POST['MT02']) and $_POST['MT02'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','MT02')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: Welcome.php");

}
if (isset($_POST['MT03']) and $_POST['MT03'] == "add to cart") {
  $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
  if ($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
  }
$id =  $db -> real_escape_string($_SESSION["account"]);
$rand = "c".rand(1000,9999);
$cno  = $db-> real_escape_string($rand);
$sql = "INSERT INTO `cart` (`cno`,`id` ,`amount` ,`pno`) VALUES ('{$cno}','{$id}','1','MT03')";
$db->query($sql) or die($db->error . $sql);
 $sn = $db->insert_id;
 header("location: Welcome.php");

}



?>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Welcome</title>
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
		<br>
		<div style="position: fixed;bottom:0;right:0;width: 120px" >
			<p style="color: white;margin: 0px auto">每件售價<br>皆 50 元</p>
			<a href="../cart.php" style="width: 100%"><img src="../picture/cart.png" style="width: 85%"><br>購物車</a>

		</div>
		<div id="Content" style="width: 60%">
			<div id="item">

				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/card01.JPG"  /></div>
					<br>
					<br>
					<input name="card01" value="add to cart" type="card01" hidden="hidden">
					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card01" src="../picture/add_cart.png" style="width: 120px">
					</div>
  					
				</form>
				
			</div>
			<div id="item"style="float: left;">

				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/card02.JPG?imageMogr2/auto-orient"></div>
					
					<br>
					<br>
					<input name="card02" value="add to cart" type="card02" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card02" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				
			</div>
			
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
					<div class="pic"><img src="../picture/card04.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="card04" value="add to cart" type="card04" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card04" src="../picture/add_cart.png" style="width: 120px">
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
					<div class="pic"><img src="../picture/card06.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="card06" value="add to cart" type="card06" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card06" src="../picture/add_cart.png" style="width: 120px">
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
					<div class="pic"><img src="../picture/card09.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="card09" value="add to cart" type="card09" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card09" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				
			</div>
			
			<div id="item" style="float: left;">

				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/card10.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="card10" value="add to cart" type="card10" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card10" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				
			</div>
			
			<div id="item" style="float: left;">

				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/card11.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="card11" value="add to cart" type="card11" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card11" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				
			</div>
			
			<div id="item" style="float: left;">

				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/card12.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="card12" value="add to cart" type="card12" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card12" src="../picture/add_cart.png" style="width: 120px">
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
			<div id="item" style="float: left;">

				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/card15.JPG?imageMogr2/auto-orient"></div>
					<br>
					<br>
					<input name="card15" value="add to cart" type="card15" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="card15" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				
			</div>

		
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
			<div id="item" style="float: left;">
				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/MT01.JPG?imageMogr2/auto-orient" ></div>
					
					<br>
					<br>
					<input name="MT01" value="add to cart" type="MT01" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="MT01" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				<br>
				<br>
			</div>
			<div id="item" style="float: left;">
				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/MT02.JPG?imageMogr2/auto-orient" ></div>
					<br>
					<br>
					<input name="MT02" value="add to cart" type="MT02" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="MT02" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				<br>
				<br>
			</div>
			<div id="item" style="float: left;">
				<form method="POST" action="" style="width: 33.33%">
					<br>
					<div class="pic"><img src="../picture/MT03.JPG?imageMogr2/auto-orient" ></div>
					<br>
					<br>
					<input name="MT03" value="add to cart" type="MT03" hidden="hidden">
  					<div style="width:150px;margin: 0px auto">
						<input type="image" alt="add to cart" name="MT03" src="../picture/add_cart.png" style="width: 120px">
					</div>
				</form>
				<br>
				<br>
			</div>



		</div>
		
		
	</body>
	
	
</html>