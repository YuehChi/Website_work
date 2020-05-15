<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
        <form action="" method="POST">
        <p>輸入想查詢的會員編號：</p>
        <input type="text" name="query"/>
        <br>
        <br>
        <input type="submit" value="查詢" name="search" />
        
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
          $sql = "SELECT patron.patronId,patron.name,patron.phone,patron.address,borrows.seqNum,location FROM `patron`,`borrows`,`bookcopy`,`librarybranch` WHERE patron.patronId = borrows.borrowPerson AND borrows.seqNum = bookcopy.seqNum AND bookcopy.location = librarybranch.branchName AND patron.patronId = "."'".$search_value."'";
          $res=$con->query($sql);
          while($row=$res->fetch_assoc()){
              echo "會員編號：".$row["patronId"];
              echo "<br>";
              echo "<br>";
              echo "會員姓名：".$row["name"];
              echo "<br>";
              echo "<br>";
              echo "會員電話：".$row["phone"];
              echo "<br>";
              echo "<br>";
              echo "會員地址：".$row["address"];
              echo "<br>";
              echo "<br>";
              echo "館內書籍編號：".$row["seqNum"];
              echo "<br>";
              echo "<br>";
              echo "分館地址：".$row["location"];
              echo "<br>";
              echo "<br>";
               echo "<br>";
              echo "<br>";
            }
          }
          

        ?>
      </div>
 
  </body>
</html>