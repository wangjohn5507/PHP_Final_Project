<?php 
include("conn.php");
$account=$_POST["id"];
$password=$_POST["pwd"];
$status='3';

$SQL="INSERT INTO user(account,password,status)
VALUES ('$account','$password',$status)";

if($result= mysqli_query($con,$SQL)){
	echo "新增成功.<br/>";
}else{
	echo "新增失敗.<br/>";
}
 ?>
 <button><a href="login.php">回到登入頁面</a></button>