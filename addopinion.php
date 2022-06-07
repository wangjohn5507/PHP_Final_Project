<h2>留下評論</h2>
<form action="opinioncheck.php" method="post">
<b>在維修整個過程中，有沒有甚麼我們可以多做改進或做得好的地方呢? 在底下告知我們：</b><br>
<textarea rows="5" cols="50" name="comment" >
</textarea><br><br>
<b>在維修整個過程中，若滿意程度滿分五分，您會給我們幾分呢?(請留1~5)</b><br>
<input type="text" name="rating">
<br>
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
echo "<input type='submit' value=\"確認送出\">"
?>
</form>