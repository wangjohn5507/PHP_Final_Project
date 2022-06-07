<html>
<h2>Update Process</h2>
<form action="processcheck.php" method="post" enctype="multipart/form-data">
<?php

include("conn.php");
$No=$_GET["No"];


$SQL="SELECT * FROM fix WHERE No='$No'";
$result = mysqli_query($con,$SQL);

while($row = mysqli_fetch_assoc($result)){
	$process=$row["process"];
}

echo "訂單編號:".$No."<br/>";
echo "<form action='processcheck.php' method='post' enctype='multipart/form-data'>";
echo "<input type='hidden' name='No' value='".$No."'>";
echo "進度:<input type='text' name='process' value='".$process."'><br/>";
echo "<input type='submit'><br/>";
?>