<!DOCTYPE html>
<?php
 $db_host = "localhost";
 $db_username = "root";
 $db_password = "rootroot";
 $db_link = @mysqli_connect($db_host, $db_username, $db_password);
 if (!$db_link) die("資料連結失敗！");
 mysqli_set_charset($db_link, 'utf8');
 $seldb = @mysqli_select_db($db_link, "wordpress");
 if (!$seldb) die("資料庫選擇失敗！");


 $sql_query = "SELECT * FROM `book`";
  if(isset($_POST["delete"])&&($_POST["delete"]=="delete")){
    @$query = "DELETE FROM `book` WHERE callNumber="."'".$_POST["callNumber"]."'";
    mysqli_query($db_link, $query);
    echo "<script>alert('Success');</script>";
 }
?>
<html>
<body >
<table border="3" align="center">
<?php
    echo  "<tr>";
    echo "<th>ISBN</th>";
    echo "<th>書籍名稱</th>";
    echo "<th>作者</th>";
    echo "<th>出版社</th>";
    echo "<th>出版社電話</th>";
    echo "<th>出版社地址</th>";
    echo "<th>刪除</th>";
    echo "</tr>";
    $result_data = mysqli_query($db_link, $sql_query);
 while($row_result=mysqli_fetch_assoc($result_data)){
          echo "<tr>";  

          echo "<td>".$row_result["callNumber"]."</td>";
          echo "<td>".$row_result["title"]."</td>";
          echo "<td>".$row_result["authorName"]."</td>";
          echo "<td>".$row_result["publisherName"]."</td>";
          echo "<td>".$row_result["publisherPhone"]."</td>";
          echo "<td>".$row_result["publisherAddress"]."</td>";
          echo "<th>";
          echo "<form action = '' method='POST'>";
          echo  "<input name='callNumber' type='hidden' value=".$row_result["callNumber"].">";
          echo  "<input type='hidden' name='delete' value='delete'>";
          echo  "<input type='submit' name='delete' value='delete'>";
          echo "</form>";
          echo "</th>";
         echo "</tr>";
       }
 
?>
</table>
</body>
</html>