<?php 
include("conn.php");
ob_start();
session_start();
$id=$_POST["id"];
$pwd=$_POST["pwd"];
echo $id;
echo $pwd;
$SQL="SELECT * FROM user WHERE account='$id' AND password='$pwd'";
$result=mysqli_query($con,$SQL);

if($row = mysqli_fetch_assoc($result)){
	echo $row["status"];
	if ($row["status"]=="1"){
		$_SESSION["login"]="S";
		$_SESSION["ID"]=$id;
		header("Location:show1.php");
	}elseif ($row["status"]=="2"){
		$_SESSION["login"]="S";
		$_SESSION["ID"]=$id;
		header("Location:show2.php");
	}elseif ($row["status"]=="3") {
		$_SESSION["login"]="S";
		$_SESSION["ID"]=$id;
		header("Location:show3.php");
	}else{
		$_SESSION["login"]="F";
		header('Location:login.php');

	}
}


?>
