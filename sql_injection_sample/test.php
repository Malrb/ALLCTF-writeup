<?php

  //接收帳號、密碼
  $account = $_REQUEST['account'];
 
  $pass = $_REQUEST['password'];
 
  //密碼使用md5加密
 
  $password = md5($pass);
 
  //查詢有無符合帳號資料
 
   $sql = "SELECT * FROM `test_sql` WHERE `account` LIKE '".$account."' AND `password` LIKE '".$password."'";
   // sql injection --  ' OR ''=''-- 
   $res = $mysql->query($sql);
 
   $result = mysqli_fetch_array($res,MYSQLI_NUM);
 
   if(empty($result)){
 
      //若無符合顯示查無帳號
 
      echo "查無此帳號<br>";
 
      echo $sql;
 
      echo "<br>輸入帳號".$account;
 
      echo "<br>輸入密碼".$pass;
   }else{
      //若符合顯示帳號、密碼資訊
      echo "Login Success" . "<br>";

      echo "帳號：".$account;
 
      echo "<br>密碼：".$pass;
 
      echo "<br>".$sql;
   }

//    解決這類型的非法登入的方式有幾種：
   
//    1. 使用正則表達式過濾字串；這是最搞剛卻也最安全的作法
   
//    2. 使用addslashes()；這個函數會在所有的單引號前加上反斜線
   
//    下面就用addslashes()來簡單說明
   
//    //在接收的參數錢加上addslashes()
   
//    $account = addslashes($_REQUEST['account']);
   
//    $pass = addslashes($_REQUEST['password']);

   