<!-- wp:html -->
<?php 
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "rootroot";
	//連線伺服器
	$db_link = @mysqli_connect($db_host, $db_username, $db_password);
	if (!$db_link) die("資料連結失敗！");
	//設定字元集與連線校對
	mysqli_set_charset($db_link, 'utf8');
	$seldb = @mysqli_select_db($db_link, "wordpress");
	if (!$seldb) die("資料庫選擇失敗！");
	//未加限制顯示筆數的SQL敘述句
	$sql_query = "SELECT * FROM `reserves`";
        	//預設每頁筆數
	$pageRow_records = 100;
	//預設頁數
	$num_pages = 1;
	//若已經有翻頁，將頁數更新
	if (isset($_GET['page'])) {
	  $num_pages = $_GET['page'];
	}
	//本頁開始記錄筆數 = (頁數-1)*每頁記錄筆數
	$startRow_records = ($num_pages -1) * $pageRow_records;
	//加上限制顯示筆數的SQL敘述句，由本頁開始記錄筆數開始，每頁顯示預設筆數
	$sql_query_limit = $sql_query." LIMIT ".$startRow_records.", ".$pageRow_records;
	//以加上限制顯示筆數的SQL敘述句查詢資料到 $result 中
	$result = mysqli_query($db_link, $sql_query_limit);
	//以未加上限制顯示筆數的SQL敘述句查詢資料到 $all_result 中
	$all_result = mysqli_query($db_link, $sql_query);
	//計算總筆數
	$total_records = mysqli_num_rows($all_result);
	//計算總頁數=(總筆數/每頁筆數)後無條件進位。
	$total_pages = ceil($total_records/$pageRow_records);
?>
<html>
<body >

<table border="1" align="center">
  <!-- 表格表頭 -->
  <tr>
    <th>編號</th>
    <th>預約日期</th>
  </tr>
<?php
	while($row_result=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row_result["seqNum"]."</td>";
		echo "<td>".$row_result["reserveTime"]."</td>";
		echo "</tr>";
	}
	
?>
</table>
</body>
</html>
<!-- /wp:html -->