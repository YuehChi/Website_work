<!DOCTYPE html>
<?php
include("connMysql.php");
if (!@mysqli_select_db($db_link, "final")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="修改")){
  $sql_query = "UPDATE `member` SET ";
  $sql_query .= "`name`='".$_POST["name"]."',";
  $sql_query .= "`birthday`='".$_POST["birthday"]."',";
  $sql_query .= "`account`='".$_POST["account"]."',";
  $sql_query .= "`password`='".$_POST["password"]."',";
  $sql_query .= "`sex`='".$_POST["sex"]."',";
  $sql_query .= "`email`='".$_POST["email"]."',";
  $sql_query .= "`phone`='".$_POST["phone"]."',";
  $sql_query .= "`address`='".$_POST["address"]."' ";
  $sql_query .= "WHERE `id`=".$_POST["id"];
  mysqli_query($db_link, $sql_query);
  //重新導向回到主畫面
  header("Location: member.php");
}
$sql_db = "SELECT * FROM `member` WHERE `id`=".$_GET["id"];
$result = mysqli_query($db_link, $sql_db);
$row_result=mysqli_fetch_assoc($result);
?>
<html>
  <head>
  	<meta charset="utf-8">
  	<title>member update</title>
    <link rel="stylesheet" type="text/css" href="../../css/b_modify.css">
  </head>
  <body>
  <div id ="modify_data">
    <p>&nbsp&nbsp&nbsp修改會員資料</p>
    <a href="member.php">會員資料</a>
    <form action="" method="POST" name="formFix" id="formFix">
        &nbsp&nbsp&nbsp&nbsp&nbsp姓名：<input type="text" name="name" id="name" value="<?php echo $row_result["name"];?>">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp生日：<input type="text" name="birthday" id="birthday" value="<?php echo $row_result["birthday"];?>">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp帳號：<input type="text" name="account" id="account" value="<?php echo $row_result["account"];?>">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp密碼：</td><td><input type="text" name="password" id="password" value="<?php echo $row_result["password"];?>">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp性別：<input type="radio" name="sex" id="radio" value="male" <?php if($row_result["sex"]=="male") echo "checked";?>>男
          <input type="radio" name="sex" id="radio" value="female" <?php if($row_result["sex"]=="female") echo "checked";?>>女
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbspEmail：</td><td><input type="text" name="email" id="email" value="<?php echo $row_result["email"];?>">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp電話：<input type="text" name="phone" id="phone" value="<?php echo $row_result["phone"];?>">
        <br>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp地址：<input name="address" type="text" id="address" size="40" value="<?php echo $row_result["address"];?>">
        <br>
        <br>
        <input name="id" type="hidden" value="<?php echo $row_result["id"];?>">
        <input name="action" type="hidden" value="修改">
        <input id = "modify" type="submit" name="action" value="修改">
        <input id = "re" type="reset" name="button2" value="重設">
      </form>
    </div>
  </body>
</html>
