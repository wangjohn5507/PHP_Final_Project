<?php

session_start();
if(isset($_SESSION["login"])){
	$date = strtotime("+7 days",time());
	$uName=$_SESSION["ID"];
	setcookie("ID",$uName,$date);
}else{
	echo "非法進入<br/>";
	header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>歡迎光臨小水獺</title>
	<link rel="stylesheet" type="text/css" href="css/base.css" />
	<link rel="stylesheet" type="text/css" href="css/demo1.css" />
	<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("請使用支持CSS變量的瀏覽器來查看這個網頁 ex:chrome");</script>
</head>
<body class="demo-1" style="background-color: 	#003060">
		<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
		</svg>
		<main>
			<div class="message">To see the menu, please view on a larger screen.</div>
			<div class="content content--fixed">
				<header class="codrops-header">
					<!-- <div class="codrops-links">
						<a class="codrops-icon codrops-icon--prev" href="http://www.htmleaf.com/jQuery/Menu-Navigation/201803315050.html" title="返回下载页"><svg class="icon icon--arrow"><use xlink:href="#icon-arrow"></use></svg></a>
						<a class="codrops-icon codrops-icon--drop" href="http://www.htmleaf.com/" title="jQuery之家"><svg class="icon icon--drop"><use xlink:href="#icon-drop"></use></svg></a>
					</div>
					<h1 class="codrops-header__title">Grid Menu</h1>
					<span class="info">Inspired by <a href="https://www.youtube.com/watch?v=Z9Ku5ptjzKw" target="_blank">Ableton Live 10: What's New</a></span> -->
				</header>
				<nav class="demos">
					<a class="demo demo--current" href="index.html"></a>
					<a class="demo" href="index2.html"></a>
				</nav>
				<button class="menu-trigger">+ 關於我們（點擊這裡開始）</button>
			</div>
			<div id="content-1" style="text-align: center;">
				<h2 class="content__title" style="color: white">維修</h2><!-- 改 -->
				<div class="content__date" style="color: white">Since 2013</div><!-- 改 -->
				<div class="content__location" style="color: white">National University of Kaohsiung , NUK</div><!-- 改 -->
			</div><br><br><br>
			<form action="fixcheck.php" method="post" enctype="multipart/form-data">
			<div  style="height:500px;width:500px;text-align:center;margin:auto;">
					<div style="width:400px;height: 200px;top:30px;position:relative;margin:auto;">
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
						$No=$row["No"];
						$opinion=$row["opinion"];

					}
					if ($No!=""&&$opinion=="") {
						echo "<font size=\"5\">請先留下上一個維修紀錄的評論，再來申請維修謝謝</font>";
					}else{
						echo "<h2>要維修甚麼項目?</h2><br>";
					
						$SQL1="SELECT * FROM price";
					$result1= mysqli_query($con,$SQL1);
					
					// echo "<table border='1'>";
					while ($row1=mysqli_fetch_assoc($result1)) {

					echo "<input  type='checkbox' name='type[$i]' value='".$row1["type"]."'>".$row1["type"]." ".$row1["price"]." 元/".$row1["unit"]."<br>";

					}
					
						// echo "<input type=\"checkbox\" name=\"type[]\" value=\"內胎\">內胎<br>";
				  //       echo "<input type=\"checkbox\" name=\"type[]\" value=\"外胎\">外胎<br>";
				  //       echo "<input type=\"checkbox\" name=\"type[]\" value=\"小折外胎\">小折外胎<br>";
				  //       echo "<input type=\"checkbox\" name=\"type[]\" value=\"踏板\">踏板<br>";
						// echo "<input type=\"checkbox\" name=\"type[]\" value=\"內襯\">內襯<br>";
						// echo "<input type=\"checkbox\" name=\"type[]\" value=\"腳架\">腳架<br>";
						// echo "<input type=\"checkbox\" name=\"type[]\" value=\"煞車塊\">煞車塊<br>";
						// echo "<input type=\"checkbox\" name=\"type[]\" value=\"煞車把手\">煞車把手<br>";
						// echo "<input type=\"checkbox\" name=\"type[]\" value=\"煞車線\">煞車線<br>";
						// echo "<input type=\"checkbox\" name=\"type[]\" value=\"坐墊\">坐墊<br>";
						
						echo "<input type=\"hidden\" name=\"datetime\"><br/>";
						echo "<h2>請留下您的電子信箱</h2><br>";
						echo "<input type='text' required name='email'>";
						echo "<h2>請留下您的電話號碼</h2><br>";
						echo "<input type='text' required name='phone'><br>";
						echo "<input type=\"submit\" name=''>";
					}
				?>
			</div>
		</div>
			</form>
			
		<!-- 	<div id="content-2" class="content content--switch">
				<h2 class="content__title">Venue</h2>
				<p class="content__text">Synchronising customer experience and possibly increase viewability. Driving bleeding edge with the aim to make users into advocates. Generating below the line so that as an end result, we increase viewability. Executing thought leadership and try to improve overall outcomes. Growing below the fold so that we create actionable insights. Considering responsive websites yet make users into advocates.</p>

			</div>
			<div id="content-3" class="content content--switch">
				<h2 class="content__title">Sponsors</h2>
				<p class="content__text">Informing vertical integration while remembering to funnel users. Take thought leadership with the possibility to surprise and delight. Target analytics to in turn infiltrate new markets. Demonstrate audience segments so that as an end result, we think outside the box. Create analytics in order to make the logo bigger.</p>
			</div>
			<div id="content-4" class="content content--switch">
				<h2 class="content__title">Speakers</h2>
				<p class="content__text">Utilising growth hacking in order to get buy in. Repurposing stakeholder management while remembering to re-target key demographics. Grow vertical integration to, consequently, create synergy. Synchronising custom solutions with the aim to gain traction. Amplifying branding to, consequently, re-target key demographics.</p>
			</div>
			<div id="content-5" class="content content--switch">
				<h2 class="content__title">Tickets</h2>
				<p class="content__text">Leverage outside the box thinking to in turn re-target key demographics. Build empathy maps with the possibility to re-target key demographics. Informing key demographics yet make users into advocates. Leveraging customer journeys and above all, maximise share of voice. Amplifying awareness with a goal to re-target key demographics.</p>
			</div>
			<div id="content-6" class="content content--switch">
				<h2 class="content__title">Schedule</h2>
				<p class="content__text">Amplifying below the fold in order to think outside the box. Leveraging innovation and above all, build ROI. Synchronise responsive websites but disrupt the balance. Synchronise innovation to, consequently, funnel users. Create above the fold in order to be on brand. Amplify awareness with a goal to infiltrate new markets.</p>
			</div> -->
			<nav class="grim">
				<div class="grim__item">
					<div class="grim__item-bg grim__item-bg--1"></div>
				</div>
				<div class="grim__item">
					<div class="grim__item-bg grim__item-bg--2"></div>
				</div>
				<div class="grim__item">
					<div class="grim__item-bg grim__item-bg--3"></div>
					<div class="grim__item-content">
						<div class="grim__item-inner">
							<button class="menu-trigger menu-trigger--close">- 關閉</button>
						</div>
					</div>
				</div>
				<div class="grim__item">
					<div class="grim__item-bg grim__item-bg--4"></div>
				</div>
				<div class="grim__item">
					<div class="grim__item-bg grim__item-bg--5"></div>
					<button onclick="location.href='show3.php'"class="grim__link grim__item-content" style="background-color: transparent;border-width:0px;">
						<div class="grim__item-inner">
							<h3 class="grim__item-title">首頁</h3>
						</div>
					</button>
				</div>
				<div class="grim__item">
					<div class="grim__item-bg grim__item-bg--6"></div>
					<button onclick="location.href='logout.php'"class="grim__link grim__item-content" style="background-color: transparent;border-width:0px;"> 
						<div class="grim__item-inner">
							<h3 class="grim__item-title">登出</h3>
							<span class="grim__item-desc">One place for all.</span>
						</div>
					</button>
				</div>
				<div class="grim__item">
					<div class="grim__item-bg grim__item-bg--7"></div>
					<button onclick="location.href='money.php'"class="grim__link grim__item-content" style="background-color: transparent;border-width:0px;"> 
						<div class="grim__item-inner">
							<h3 class="grim__item-title">查看價目表</h3>
							<span class="grim__item-desc">Find out who supports us.</span>
						</div>
					</button>
				</div>
				<div class="grim__item">
					<div class="grim__item-bg grim__item-bg--8"></div>
					<button onclick="location.href='opinion.php'"class="grim__link grim__item-content" style="background-color: transparent;border-width:0px;"> 
						<div class="grim__item-inner">
							<h3 class="grim__item-title">查看評價</h3>
							<span class="grim__item-desc">Get the right ticket</span>
						</div>
					</button>
				</div>
				<div class="grim__item">
					<div class="grim__item-bg grim__item-bg--9"></div>
					<button onclick="location.href='join.php'"class="grim__link grim__item-content" style="background-color: transparent;border-width:0px;"> 
						<div class="grim__item-inner">
							<h3 class="grim__item-title">我要加入小水獺</h3>
							<span class="grim__item-desc">Smart people. All in one place.</span>
						</div>
					</button>
				</div>
				<div class="grim__item">
					<div class="grim__item-bg grim__item-bg--10" data-duration="1000" data-easing="easeOutQuint"></div>
					<button onclick="location.href='fix.php'"class="grim__link grim__item-content" style="background-color: transparent;border-width:0px;"> 
						<div class="grim__item-inner">
							<h3 class="grim__item-title">我要維修</h3>
							<span class="grim__item-desc">When the time is right, you'll learn.</span>
						</div>
					</button>
				</div>
			</nav>
		</main>
		<script src="js/demo.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/menu.js"></script>
	</body>
</html>