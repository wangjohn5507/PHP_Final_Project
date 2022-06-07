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
$SQL="SELECT * FROM fix WHERE id='$uName'";
$result = mysqli_query($con,$SQL);
while($row = mysqli_fetch_assoc($result)){
	$No=$row["No"];}

echo "是否確定刪除維修表?";

echo "<input type='button' onclick=\"javascript:location.href='delcheck.php?No=$No'\" value='確定'>";
echo "<input type='button' onclick=\"javascript:location.href='show.php'\" value='我反悔惹'>";
?>