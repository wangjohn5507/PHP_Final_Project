<?php
include("conn.php");
$No=$_POST["No"];
$process=$_POST["process"];
echo $No;
echo $process;
$SQL="UPDATE fix SET process='$process' WHERE No='$No'";


if($result = mysqli_query($con,$SQL)){
	header('Location: show1.php');
}else{
	echo "更新失敗";
}
?>