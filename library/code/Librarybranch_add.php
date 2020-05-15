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
    $branchName   = $db->real_escape_string($_POST['branchName']);
    $branchAddress   = $db->real_escape_string($_POST['branchAddress']);
    $sql    = "INSERT INTO `librarybranch` (`branchName` ,`branchAddress` ) VALUES('{$branchName}','{$branchAddress}')";
    $db->query($sql) or die($db->error . $sql);
    $sn = $db->insert_id;
    echo "<script>alert('Success');</script>";
}


?>
<html>
<body>
<form action="" method="post" name="formAdd" id="formAdd">
 
    
    分館名<input type="text" name="branchName">
    <br>
    分館地址<input name="branchAddress" type="text">
    <br>
    <br>
     
      <input type="submit" name="action" value="insert" class="add">
      <input type="reset" name="button" value="reset" class="add">
     
</form>
</body>
</html>