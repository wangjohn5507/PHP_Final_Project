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
$comment=$_POST["comment"];
$rating=$_POST["rating"];
$fdate=date('Y-m-d', time());//改
$SQL="SELECT * FROM fix WHERE id='$uName'";
$result = mysqli_query($con,$SQL);
while($row = mysqli_fetch_assoc($result)){
	$No=$row["No"];
	$sdate=$row["sdate"];}
echo $No;
$SQL1="UPDATE fix SET opinion='$comment',fdate='$fdate',rating='$rating' WHERE No='$No'";

$type1=$_SESSION["type"];
for($k=0;$k<10;$k++){
if($type1[$k]==""){
	break;
}
$SQL2="INSERT INTO analysis(fixNo,id,type,sdate,fdate)
VALUES ('$No','$uName','$type1[$k]','$sdate','$fdate')";
if($result = mysqli_query($con,$SQL2)){
}else{
	echo "新增失敗";
}
}


if($result1 = mysqli_query($con,$SQL1)){
	header('Location: opinion.php');
}else{
	echo "更新失敗";
}







?>

