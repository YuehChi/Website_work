<!DOCTYPE html>
<html>
<head>
	<title>search</title>
	<meta charset="utf-8">
		<style type="text/css">
      body {
            background-image: url(bg3.png);
            background-repeat: no-repeat;
            background-size: cover;
        }
	</style>
</head>
<body >
	<h1 align="center">查詢會員資料</h1>
	<form action="search1.php" method="POST" align="center" >
		<p class="search">請輸入會員編號(ex:1,2,3......)</p>
		<div >
		<input type="text" name="query"/>
        <input type="submit" value="search" name="search" class="search" />
        </div>
	</form>
	
	<br>
	<table align="center" class="search" border="1">
<?php
	@$search_value=$_POST["query"];
	$servername = "localhost";
	$username = "root";
	$password = "rootroot";
	$dbname  = "movie_shop";
	$con=new mysqli($servername,$username,$password,$dbname);
	 $con->set_charset("utf8");
	if($con->connect_error){
    	echo 'Connection Faild: '.$con->connect_error;
    }
    else{
        $sql = "SELECT * FROM `member` WHERE cID = '{$search_value}'";

        $res=$con->query($sql);
        
        while($row=$res->fetch_assoc()){
        	
        	
        	echo "<tr>";
    		echo "<th>"."編號"."</th>";
    		echo "<th>"."姓名"."</th>";
    		echo "<th>"."性別"."</th>";
    		echo "<th>"."生日"."</th>";
    		echo "<th>"."email"."</th>";
    		echo "<th>"."電話"."</th>";
    		echo "<th>"."住址"."</th>";
    		echo "</tr>";
        	echo "<tr>";
			echo "<td>".$row["cID"]."</td>";
			echo "<td>".$row["cName"]."</td>";
			echo "<td>".$row["cSex"]."</td>";
			echo "<td>".$row["cBirthday"]."</td>";
			echo "<td>".$row["cEmail"]."</td>";
			echo "<td>".$row["cPhone"]."</td>";
			echo "<td>".$row["cAddr"]."</td>";
			echo "</tr>";
		
			
            


        }     

    }
?>

</table>
</div>
</body>
</html>