<!DOCTYPE html>
<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "rootroot";
$db=@mysqli_connect($db_host, $db_username, $db_password);
mysqli_set_charset($db, 'utf8');
if (!@mysqli_select_db($db, "wordpress")) die("資料庫選擇失敗！");

if(isset($_POST["update"])&&($_POST["update"]=="修改")){
$sql_query = "UPDATE `librarybranch` SET `branchname`='".$_POST["branchName"]."',"."`branchaddress`='".$_POST["branchAddress"]."'"."WHERE `branchname`= '".$_POST["branchName"]."'";
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
    <div id ="modify_data">
        <form action="" method="POST">
        <p>輸入想修改的圖書館名：</p>
        <input type="text" name="query"/>
        <br>
        <br>
        <input id="modify" type="submit" value="查詢" name="search" />
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
            $sql = "SELECT * FROM `librarybranch` WHERE branchname="."'".$search_value."'";
            $res=$con->query($sql);
            while($row=$res->fetch_assoc()){

            
              echo "<form action = '' method='POST' name='formFix' id='formFix'>";
              echo "分館名：";
              echo "<input type='text' name='branchName' id='branchName' value=".$row["branchName"].">";
              echo "<br>";
              echo "<br>";
              echo "分館地址：";
              echo "<input type='text' name='branchAddress' id='branchAddress' value=".$row["branchAddress"].">";
              echo "<br>";
              echo "<br>";
       
              echo "<input name='branchName' type='hidden' value=".$row["branchName"].">";
              echo "<input name='update' type='hidden' value='修改'>";
              echo "<input id = 'modify' type='submit' name='update' value='修改'>";
              echo "<input id = 're' type='reset' name='button2' value='重設'>";
              echo "</form>";
              
            }
          }
          }

        ?>
      </div>
 
  </body>
</html>