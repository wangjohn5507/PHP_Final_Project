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
$SQL="SELECT * FROM fix ";
$result = mysqli_query($con,$SQL);
echo "<table border='1'>";
date_default_timezone_set('Asia/Taipei');
while($row = mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>".$row["No"]."</td><td>".$row["id"]."</td><td>".$row["type"]."</td><td>".$row["process"]."<a href=updateprocess.php?No=".$row["No"].">修改進度</a></td><td>".$row["opinion"]."</td><td>".$row["sdate"]."</td><td>".$row["fdate"]."</td>";
	echo "</tr>";
}
echo "</table>";

?>