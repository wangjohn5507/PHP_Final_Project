<h2>Update Your Data</h2>
<form action="updatecheck.php" method="post" enctype="multipart/form-data">



<?php
include("conn.php");
$No=$_GET["No"];


$SQL="SELECT * FROM fix WHERE No='$No'";
$result = mysqli_query($con,$SQL);

while($row = mysqli_fetch_assoc($result)){
	$type=$row["type"];
	$email=$row["email"];
	$phone=$row["phone"];
}

echo "訂單編號:".$No."<br/>";
echo "<form action='updatecheck.php' method='post' enctype='multipart/form-data'>";
echo "<input type='hidden' name='No' value='".$No."'>";
echo "維修項目:$type<br/>";

echo "修改維修項目：<br>";
echo "<input type=\"checkbox\" name=\"type[]\" value=\"內胎\">內胎<br>";
echo "<input type=\"checkbox\" name=\"type[]\" value=\"外胎\">外胎<br>";
echo "<input type=\"checkbox\" name=\"type[]\" value=\"小折外胎\">小折外胎<br>";
echo "<input type=\"checkbox\" name=\"type[]\" value=\"踏板\">踏板<br>";
echo "<input type=\"checkbox\" name=\"type[]\" value=\"內襯\">內襯<br>";
echo "<input type=\"checkbox\" name=\"type[]\" value=\"腳架\">腳架<br>";
echo "<input type=\"checkbox\" name=\"type[]\" value=\"煞車塊\">煞車塊<br>";
echo "<input type=\"checkbox\" name=\"type[]\" value=\"煞車把手\">煞車把手<br>";
echo "<input type=\"checkbox\" name=\"type[]\" value=\"煞車線\">煞車線<br>";
echo "<input type=\"checkbox\" name=\"type[]\" value=\"坐墊\">坐墊<br>";

echo "電子信箱:<input type='text' name='email' value='".$email."'><br/>";
echo "電話號碼:<input type='text' name='phone' value='".$phone."'><br/>";
echo "<input type='submit'><br/>";



?>

</form>