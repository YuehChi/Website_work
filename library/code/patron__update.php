<!DOCTYPE html>
<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "rootroot";
$db=@mysqli_connect($db_host, $db_username, $db_password);
mysqli_set_charset($db, 'utf8');
if (!@mysqli_select_db($db, "wordpress")) die("資料庫選擇失敗！");
if(isset($_POST["update"])&&($_POST["update"]=="update")){
$sql_query = "UPDATE `patron` SET patronId="."'".$_POST["patronId"]."',"."name="."'".$_POST["name"]."',"."phone="."'".$_POST["phone"]."',"."address="."'".$_POST["address"]."' WHERE"." patronId ="."'".$_POST["patronId"]."'";
mysqli_query($db, $sql_query);

 echo "<script>alert('Success');</script>";
}

?>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
        <form  method="POST">
        <p>輸入想修改的會員id：</p>
        <input type="text" name="query"/>
        <br>
        <br>
        <input type="submit" value="查詢" name="search" />
        <input type="hidden" value="查詢" name="search" />
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
            $sql = "SELECT * FROM `patron` WHERE
patronId="."'".$search_value."'";
            $res=$con->query($sql);
            while($row=$res->fetch_assoc()){

            
              echo "<form  method='POST'>";
              echo "會員ID：";
              echo "<input type='text' name='patronId' value=".$row["patronId"].">";
              echo "<br>";
              echo "<br>";
              echo "會員姓名：";
              echo "<input type='text' name='name' value=".$row["name"].">";
              echo "<br>";
              echo "<br>";
              echo "會員電話：";
              echo "<input type='text' name='phone' value=".$row["phone"].">";
              echo "<br>";
              echo "<br>";
              echo "會員地址：";
              echo "<input type='text' name='address' value=".$row["address"].">";
              echo "<br>";
              echo "<br>";
       
              echo "<input name='patronId' type='hidden' value=".$row["patronId"].">";
              echo "<input name='update' type='hidden' value='update'>";
              echo "<input type='submit' name='update' value='update'>";
              echo "<input type='reset' name='button2' value='重設'>";
              echo "</form>";
            }
          }
          }

        ?>
      </div>
 
  </body>
</html>