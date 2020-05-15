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
    $patronId   = $db->real_escape_string($_POST['patronId']);
    $name   = $db->real_escape_string($_POST['name']);
    $phone   = $db->real_escape_string($_POST['phone']);
    $address   = $db->real_escape_string($_POST['address']);
    $sql    = "INSERT INTO `patron` (`patronId` ,`name` ,`phone`,`address` ) VALUES('{$patronId}','{$name}','{$phone}','{$address}')";
    $db->query($sql) or die($db->error . $sql);
   
}
 echo "<script>alert('Success');</script>";
?>
<html>
<body>
<form action="" method="post">
 
     
      會員編號<input type="text" name="patronId" placeholder="a000000">
  
      姓名<input type="text" name="name" >
    
      電話<input type="text" name="phone" placeholder="0900000000">
   
      地址<input name="address" type="text">
  
    
      <input type="submit" name="action" value="insert">
      <input type="hidden" name="action" value="insert">
      <input type="reset" name="button" value="reset">
     
</form>
</body>
</html>