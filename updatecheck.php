<?php
include("conn.php");
$No=$_POST["No"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$type=$_POST["type"];
$newtype=$type[0].$type[1].$type[2].$type[3].$type[4].$type[5].$type[6].$type[7].$type[8];
echo $No;
echo $newtype;
echo $phone;
echo $email;
if ($type[0]=="") {
	$SQL="UPDATE fix SET email='$email',phone='$phone' WHERE No='$No'";
}else{
	$SQL="UPDATE fix SET email='$email',phone='$phone',type='$newtype' WHERE No='$No'";
}

if($result = mysqli_query($con,$SQL)){
	header('Location: show.php');
}else{
	echo "更新失敗";
}
?>