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
$No=$_GET["No"];//用GET取得網址列
echo $No;

$SQL="DELETE FROM fix WHERE No=$No";
$SQL1="DELETE FROM type WHERE id=$uName";
if($result = mysqli_query($con,$SQL)){
	echo "刪除成功";
	header('Location: show3.php');
}else{
	echo "刪除失敗";
}



?>