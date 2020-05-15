<?php 
  $_DB_HOST = "localhost";
  $_DB_ID = "root";
  $_DB_PASS = "rootroot";
  $_DB_NAME = "wordpress";
  if (isset($_POST['action']) and $_POST['action'] == "insert") {
    $db = new mysqli($_DB_HOST,$_DB_ID, $_DB_PASS, $_DB_NAME);
    if ($db->connect_error) {
        die('無法連上資料庫：' . $db->connect_error);
    }
    $db->set_charset("utf8");
    $callNumber   = $db->real_escape_string($_POST['callNumber']);
    $title   = $db->real_escape_string($_POST['title']);
    $authorName   = $db->real_escape_string($_POST['authorName']);
    $publisherName= $db->real_escape_string($_POST['publisherName']);
    $publisherPhone= $db->real_escape_string($_POST['publisherPhone']);
    $publisherAddress= $db->real_escape_string($_POST['publisherAddress']);
    $sql    =     "INSERT INTO `book` (`callNumber` ,`title` ,`authorName` ,`publisherName` ,`publisherPhone` ,`publisherAddress`) VALUES('{$callNumber}','{$title}','{$authorName}','{$publisherName}', '{$publisherPhone}','{$publisherAddress}')";
    $db->query($sql) or die($db->error . $sql);
    $sn = $db->insert_id;
    echo "<script>alert('Success');</script>";
}
?>
<html>
<body>

<form action="" method="post" name="formAdd" id="formAdd">
 
      書籍編號<input type="text" name="callNumber" id="callNumber">
      <br>
      書籍名稱<input type="text" name="title" id="title">
   <br>
      作者<input type="text" name="authorName" id="authorName">
   <br>
      出版社<input type="text" name="publisherName" id="publisherName">
    <br>
      出版社電話<input type="text" name="publisherPhone" id="publisherPhone">
   <br>
      出版社地址<input name="publisherAddress" type="text" id="publisherAddress" size="40">
    <br><br>
     
      <input type="submit" name="action" value="insert" class="add">
      <input type="reset" name="button2" value="reset" class="add">
      

</form>
</body>
</html>