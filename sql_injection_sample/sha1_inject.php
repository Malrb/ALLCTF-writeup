<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("db.conn.php");
$id = $_POST['id'];
$passwd = sha1($_POST['passwd']);

//搜尋資料庫資料
$sql = "SELECT * FROM user where id='$id' AND passwd = '$passwd'";
//echo $sql;
$result = $link->query($sql);
$row = $result->fetch_row();
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($result->num_rows > 0) {
  //將帳號寫入session，方便驗證使用者身份
  $_SESSION['username'] = $id;
  echo '<h1 style="text-align:center;">登入成功!</h1>';
  echo '<meta http-equiv=REFRESH CONTENT=1;url=test.php>';
}else{
  echo '<h1 style="text-align:center;color: rgb(255, 0, 0); text-shadow: 2px 2px 5px rgb(0, 0, 22);">登入失敗!</h1>';
  echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
}


#Sample from Information security class by Asia University
