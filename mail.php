<?php

require("PHPMailer/PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail -> IsSMTP();
$mail -> SMTPAuth = true;//SMTP伺服器是否要驗證
$mail -> Host = "ssl:smyp.gmail.com"; //Gmail 的 smtp 主機
$mail -> Port=465;

$mail -> Username = "joy04070707@gmail.com"; // 設定驗證帳號 
$mail -> Password = "fallinginlove~04071033"; // 設定驗證密碼
$mail -> CharSet = "UTF-8"; 

$To =" php@nuk.im "; 
$Subject = "php期末報到 A1033343";
$Message = "A1033343 10.0.40.111 00-24-D6-70-96-DA";
$Headers = "From: joy04070707@gmail.com";

if(mail("$To", "$Subject", "$Message", "$Headers")):
   echo "信件已經發送成功。";//寄信成功就會顯示的提示訊息
else:
   echo "信件發送失敗！";//寄信失敗顯示的錯誤訊息
endif;

?>
