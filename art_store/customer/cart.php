<!DOCTYPE html>
<?php
$_db_host = "localhost";
$_db_id = "root";
$_db_password = "rootroot";
$_db_name = "final";
session_start();

$db = new mysqli($_db_host,$_db_id, $_db_password, $_db_name);
if($db->connect_error) {
    die('無法連上資料庫：' . $db->connect_error);
} 

$sql_query = "SELECT * FROM `cart`";
$result = mysqli_query($db, $sql_query);
$total_records = mysqli_num_rows($result);
if(isset($_POST["action"])&&($_POST["action"]=="刪除商品")){	
	$sql_query = "DELETE FROM `cart` WHERE `cno`= '".$_POST["cno"]."'"."AND". "`id` = '".$_SESSION["account"]."'"."AND"."`pno` = '".$_POST["pno"]."'";
	mysqli_query($db, $sql_query);
	header("Location: cart.php");
}
if(isset($_POST["action01"])&&($_POST["action01"]=="更正數量")){	
	$sql_query = "UPDATE `cart` SET `id`='".$_SESSION["account"]."',"."`amount`='".$_POST["amount"]."',"."`pno`='".$_POST["pno"]."'"."WHERE `cno`= '".$_POST["cno"]."'"; 
	mysqli_query($db, $sql_query);

	header("Location: cart.php");
}
if(isset($_POST["check"])&&($_POST["check"]=="送出訂單")){

	$sql_query_1 = "INSERT INTO `order` (`cno`,`id`,`amount`,`pno`) SELECT * FROM `cart`";//insert data from cart to order
	$sql_query_2 = "TRUNCATE TABLE `cart`";//delete all data in cart
	mysqli_query($db, $sql_query_1);
	mysqli_query($db,$sql_query_2);
	header("Location: ./Home/Welcome.php");
}
if(isset($_POST["cancel"])&&($_POST["cancel"]=="取消訂單")){
	$sql_query_2 = "TRUNCATE TABLE `cart`";
	mysqli_query($db,$sql_query_2);
	header("Location: ./Home/Welcome.php");
}

?>
<html>
<head>
	<meta charset="utf-8">
	<title>購物車</title>
	
</head>
<body style="background-image: url(./picture/bg2.jpg);background-size: cover;background-repeat: no-repeat;">
	<div align="center" style="margin-top: 10%;margin-left: 5%">
		<table border="1" align="center" >
  
  			<tr>
    			<th width="20%">訂單號碼</th>
    			<th width="20%">產品</th>
    			<th width="20%">數量</th>
    			<th width="20%">更正</th>
    			<th width="20%">取消</th>

  			</tr>
  
			<?php
	
				echo "您好! ".$_SESSION["account"]."<br>";
				echo "以下是您的訂單明細:"."<br>";
	
				$total = 0;
				while($row_result=mysqli_fetch_assoc($result)){
				if ($_SESSION["account"] == $row_result["id"]) {
					echo "<tr>";
					echo "<td align = 'center'>".$row_result["cno"]."</td>";
					echo "<td align = 'center'>".$row_result["pno"]."</td>";

					echo "<form action = '' method ='POST'>";
					echo "<td><input align = 'center' type = 'text' name  = 'amount' value = ".$row_result["amount"]." size = '3'>";
					echo "<input name = 'pno' type  = 'hidden' value = ".$row_result['pno'].">";
					echo "<input name = 'cno' type  = 'hidden' value = ".$row_result['cno'].">";
					echo "</td>";
					echo "<td>";
					echo "<input type = 'submit' name = 'action01' value = '更正數量'></input>";
					echo "</td>";
					echo "</form>";

					echo "<form action = '' method = 'POST'>";
					echo "<td>";
					echo "<input name = 'cno' type  = 'hidden' value = ".$row_result['cno'].">";
					echo "<input name = 'pno' type  = 'hidden' value = ".$row_result['pno'].">";
					echo "<input type = 'submit' name = 'action' value = '刪除商品'></input>";
					echo "</td>";
					echo "</form>";
					echo "</tr>";
					$total = $total+$row_result["amount"];
				}

 	   			else{
    				echo "購物車中無商品!"."<br>";
    			}
				}	

				$price = $total*50;
				echo "總金額 : ".$price;
	
			?>
    	
   
    
		</table>
		<br>
		<br>
		<form action="" method="POST" style="">
    		<input name = "check" type  = "submit" value = "送出訂單" hidden="hidden">
			<input type="submit" name = "check"  src="./picture/submit.png" style="width: 120px;padding:5px 15px; background:#ccc; border:0 none;
																				   cursor:pointer;-webkit-border-radius: 5px;border-radius: 5px; " value = "送出訂單">
			<input name = "cancel" type  = "submit" value = "取消訂單" hidden="hidden">
			<input type="submit" name = "cancel" src="./picture/cancel.png" style="width: 120px;padding:5px 15px; background:#ccc; border:0 none;
																				   cursor:pointer;-webkit-border-radius: 5px;border-radius: 5px;" value = "取消訂單">
			
    	</form>
	</div>
  	

</body>
</html>