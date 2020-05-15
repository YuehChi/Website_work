<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
        <form action="" method="POST">
        <p>輸入想查詢的書籍編號：</p>
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
          $sql = "SELECT book.callNumber,title,location,seqNum FROM `book`,`bookcopy`,`librarybranch` WHERE book.callNumber = bookcopy.callNumber AND librarybranch.branchName = bookcopy.location AND book.callNumber = "."'".$search_value."'";
          $res=$con->query($sql);
          while($row=$res->fetch_assoc()){
              echo "ISBN：".$row["callNumber"];
              echo "<br>";
              echo "<br>";
              echo "書名：".$row["title"];
              echo "<br>";
              echo "<br>";
              echo "位於哪間館：".$row["location"];
              echo "<br>";
              echo "<br>";
              echo "館內書籍編號：".$row["seqNum"];
              echo "<br>";
              echo "<br>";
              
            }
          }
          

        ?>
      </div>
 
  </body>
</html>