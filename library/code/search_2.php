<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
        <form action="" method="POST">
        <p>輸入想查詢的書籍ISBN：</p>
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
          $sql = "SELECT book.callNumber,bookcopy.seqNum,borrowDate,duedate,title,authorName "."FROM `book`,`bookcopy`,`borrows`"."WHERE book.callNumber = bookcopy.callNumber AND borrows.seqNum = bookcopy.seqNum AND book.callNumber ="."'".$search_value."'";
          $res=$con->query($sql);
          while($row=$res->fetch_assoc()){
              echo "ISBN：".$row["callNumber"];
              echo "<br>";
              echo "<br>";
              echo "書名：".$row["title"];
              echo "<br>";
              echo "<br>";
              echo "作者：".$row["authorName"];
              echo "<br>";
              echo "<br>";
              echo "館內書籍編號：".$row["seqNum"];
              echo "<br>";
              echo "<br>";
              echo "借出時間：".$row["borrowDate"];
              echo "<br>";
              echo "<br>";
              echo "到期時間：".$row["duedate"];
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