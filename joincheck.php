<?php
include("conn.php");
$Name=$_POST["Name"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$reason=$_POST["reason"];
$expe=$_POST["experience"];



$SQL="INSERT INTO joinmember(Name,phone,gender,email,reason,experience)
VALUES ('$Name','$phone','$gender','$email','$reason','$expe')";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/src/Exception.php";
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true; // turn on SMTP authentication

$mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線 
$mail->Host = "smtp.gmail.com"; // Gmail的SMTP主機 
$mail->Port = 465; // Gmail的SMTP主機的port為465 
$mail->CharSet = "utf-8"; // 設定郵件編碼 
$mail->Encoding = "base64"; 
$mail->WordWrap = 50; // 每50個字元自動斷行 

$mail->Username = "a1073333@mail.nuk.edu.tw"; // 設定驗證帳號 
$mail->Password = "John550714"; // 設定驗證密碼 
$mail->From = "a1073333@mail.nuk.edu.tw"; // 設定寄件者信箱 
$mail->FromName = "小水獺維修中心"; // 設定寄件者姓名 
$mail->Subject = "加入小水獺申請"; // 設定郵件標題
$mail->Body = "已經收到您的申請表單囉，若錄取將第一時間通知您！"; 
$mail->IsHTML(true); // 設定郵件內容為HTML 
$mail->SMTPOptions = array(
	'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true,
	),
);
$mail->AddAddress("$email"); // 收件者郵件及名稱 

if($mail->Send()) { 
echo "郵件寄出 已收到信件！"."<br/>"; 
} else {
echo $mail->ErrorInfo . "<br/>"; 
} 


if($result = mysqli_query($con,$SQL)){
	header('Location: show.php');
}else{
	echo "新增失敗";
}

?>