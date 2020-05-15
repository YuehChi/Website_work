<!DOCTYPE html>
<html>
	<head>
	<title>search</title>
	<link rel="stylesheet" type="text/css" href="../../css/b_modify.css">
		<style>
		#sear{
			font-size: 16px;
		}
		#back{
			font-size: 16px;
		}
		</style>
	</head>
	<body>
		<div id ="modify_data">
			<p>&nbsp&nbsp&nbsp查詢訂單<a id ="back" href="../content.php">回管理主頁</a></p>
				<form action="search.php" method="POST">
				<p id="sear">&nbsp&nbsp&nbsp&nbsp&nbsp請輸入商品名：
				<input type="text" name="query"/>
				<br>
				<br>
				<!-- <p id="sear">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<p> -->
		  		<input id="modify" type="submit" value="查詢" name="search" /></p>
				</form>
				<br>
					<?php
					$servername = "localhost";
					$username = "root";
					$password = "rootroot";
					$dbname  = "final";
					$con=new mysqli($servername,$username,$password,$dbname);
					$con->set_charset("utf8");

					@$search_value=$con-> real_escape_string($_POST["query"]);

					if($con->connect_error){
				    	echo 'Connection Faild: '.$con->connect_error;
				  }
				  else{
				  //search the person who buy the product
				 		$sql = "SELECT member.account,order.amount,member.email,member.address,order.cno FROM `order`,`member` WHERE order.id = member.account AND order.pno = '{$search_value}'";
				    $res=$con->query($sql);
				    while($row=$res->fetch_assoc()){

				  		// echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp"."訂單編號："."&nbsp".$row["cno"]."<br>";
				    	echo "&nbsp&nbsp&nbsp&nbsp&nbsp"."會員姓名："."&nbsp".$row["account"]."<br>";
				    	echo "&nbsp&nbsp&nbsp&nbsp&nbsp"."會員Email："."&nbsp".$row["email"]."<br>";
				    	echo "&nbsp&nbsp&nbsp&nbsp&nbsp"."會員地址："."&nbsp".$row["address"]."<br>";
				    }
				  }

				?>
			</div>
		</div>
	</body>
</html>
