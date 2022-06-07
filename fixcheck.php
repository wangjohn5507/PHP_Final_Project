<?php
include("conn.php");

session_start();
if(isset($_SESSION["login"])){
	$date = strtotime("+7 days",time());
	$uName=$_SESSION["ID"];
	setcookie("ID",$uName,$date);
}else{
	echo "非法進入<br/>";
	header('Location:login.php');
}

$type=array("","","","","","","","","","");
$temp=$_POST["type"];
$i=0;
foreach($temp as $value){
	$type[$i]=$value;
	// echo $type[$i];
	$i=$i+1;
}
if($type!=""){
	$_SESSION["type"]=$type;
}
$email=$_POST["email"];
$phone=$_POST["phone"];



$newtype=$type[0].$type[1].$type[2].$type[3].$type[4].$type[5].$type[6].$type[7].$type[8];
// echo $newtype;
// if ($newtype=="") {
// 	echo "您未選擇任何維修項目，請填寫之後再繳交，畫面將在三秒後導回維修申請頁面";
// 	// echo "<meta http-equiv='refresh' content='3;url=fix.php'/>";
// }

$sdate=date('Y-m-d', time());
$SQL="INSERT INTO fix(id,type,process,sdate,email,phone)
VALUES ('$uName','$newtype','0','$sdate','$email','$phone')";



// $SQL1="INSERT INTO type(sdate)
// VALUES ('$sdate')";
// if($result = mysqli_query($con,$SQL1)){
// }else{
// 	echo "新增失敗";
// }



if($result = mysqli_query($con,$SQL)){
	header('Location:show3.php');
}else{
	echo "新增失敗";
}


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require "PHPMailer/src/Exception.php";
// require "PHPMailer/src/PHPMailer.php";
// require "PHPMailer/src/SMTP.php";

// $mail = new PHPMailer();
// $mail->IsSMTP();
// $mail->SMTPAuth = true; // turn on SMTP authentication

// $mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線 
// $mail->Host = "smtp.gmail.com"; // Gmail的SMTP主機 
// $mail->Port = 465; // Gmail的SMTP主機的port為465 
// $mail->CharSet = "utf-8"; // 設定郵件編碼 
// $mail->Encoding = "base64"; 
// $mail->WordWrap = 50; // 每50個字元自動斷行 

// $mail->Username = "a1073333@mail.nuk.edu.tw"; // 設定驗證帳號 
// $mail->Password = "John550714"; // 設定驗證密碼 
// $mail->From = "a1073333@mail.nuk.edu.tw"; // 設定寄件者信箱 
// $mail->FromName = "小水獺維修中心"; // 設定寄件者姓名 
// $mail->Subject = "維修申請"; // 設定郵件標題
// $mail->Body = "我們將會查看您的維修表單，請在繳交表單的兩天內將車子放到學宿地下室，並在車子坐墊上貼上訂單編號，我們將會立即幫您維修！在維修階段前您都可以更改維修內容及刪除哦！"; 
// $mail->IsHTML(true); // 設定郵件內容為HTML 
// $mail->SMTPOptions = array(
// 	'ssl' => array(
// 		'verify_peer' => false,
// 		'verify_peer_name' => false,
// 		'allow_self_signed' => true,
// 	),
// );
// $mail->AddAddress("$email"); // 收件者郵件及名稱 

// if($mail->Send()) { 
// echo "郵件寄出 已收到信件！"."<br/>"; 
// } else {
// echo $mail->ErrorInfo . "<br/>"; 
// } 








?>