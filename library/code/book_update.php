<!DOCTYPE html>
<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "rootroot";
$db=@mysqli_connect($db_host, $db_username, $db_password);
mysqli_set_charset($db, 'utf8');
if (!@mysqli_select_db($db, "wordpress")) die("資料庫選擇失敗！");

if(isset($_POST["update"])&&($_POST["update"]=="修改")){
$sql_query = "UPDATE `book` SET callNumber="."'".$_POST["callNumber"]."',"."title="."'".$_POST["title"]."',"."authorName="."'".$_POST["authorName"]."',"."publisherName="."'".$_POST["publisherName"]."',"."publisherPhone="."'".$_POST["publisherPhone"]."',"."publisherAddress = "."'".$_POST["publisherAddress"]."'"."WHERE callNumber ="."'".$_POST["callNumber"]."'";
mysqli_query($db, $sql_query);
 echo "<script>alert('Success');</script>";
}

?>
<html>
  <head>
  	<meta charset="utf-8">
  <style type="text/css">
</style>
  </head>
  <body>
        <form action="" method="POST">
        <p>輸入想修改的書籍編號：</p>
        <input type="text" name="query"/>
        <br>
        <br>
        <input type="submit" value="查詢" name="search" />
        <input name="search" type="hidden" value="查詢">
        </form>
        <br>
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "rootroot";
          $dbname  = "wordpress";
          $con=new mysqli($servername,$username,$password,$dbname);
          $con->set_charset("utf8");

          @$search_value=$con-> real_escape_string($_POST["query"]);

          if($con->connect_error){
              echo 'Connection Faild: '.$con->connect_error;
          }
          else{
            if(isset($_POST["search"])&&($_POST["search"]=="查詢")){
            $sql = "SELECT * FROM `book` WHERE `callNumber`="."'".$search_value."'";
            $res=$con->query($sql);
            while($row=$res->fetch_assoc()){

            
              echo "<form action = '' name='formFix' method = 'post'>";
              echo "書籍編號：";
              echo "<input type='text' name='callNumber' value=".$row["callNumber"].">";
              echo "<br>";
              echo "<br>";
              echo "書名：";
              echo "<input type='text' name='title' value=".$row["title"].">";
              echo "<br>";
              echo "<br>";
              echo "作者：";
              echo "<input type='text' name='authorName' value=".$row["authorName"].">";
              echo "<br>";
              echo "<br>";
              echo "出版社：";
              echo "<input type='text' name='publisherName' value=".$row["publisherName"].">";
              echo "<br>";
              echo "<br>";
              echo "出版社電話：";
              echo "<input type='text' name='publisherPhone' value=".$row["publisherPhone"].">";
              echo "<br>";
              echo "<br>";
              echo "出版社地址：";
              echo "<input type='text' name='publisherAddress' value=".$row["publisherAddress"].">";
             
              echo "<input name='callNumber' type='hidden' value=".$row["callNumber"].">";
              echo "<input name='update' type='hidden' value='修改'>";
              echo "<input type='submit' name='update' value='修改'>";
              echo "<input type='reset' name='button2' value='重設'>";
              echo "</form>";
            }
          }
          }

        ?>
      </div>
 
  </body>
</html>