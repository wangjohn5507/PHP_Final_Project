<!-- <?php
	include("conn.php");
	$SQL="SELECT * FROM product";
$result= mysqli_query($con,$SQL);
echo "<table border='1'>";
echo "<tr><td>"."No"."</td><td>"."Name"."</td><td>"."Price"."</td><td>"."Photo"."</td><td>"."Photo2"."</td><td>"."Photo3"."</td><td>"."Photo4"."</td><td>"."Dates"."</td></tr>";

date_default_timezone_set('Asia/Taipei');
while ($row=mysqli_fetch_assoc($result)) {
	echo "<tr>";
	$newdate=date('Y-m-d H:i:s',$row["Dates"] );
	echo "<td>".$row["No"]."</td><td>".$row["Name"]."</td><td>".$row["Price"]."</td>
		<td>"."<img width='200' src='".$row["Photo"]."'>"."</td>
		<td>"."<img width='200' src='".$row["Photo2"]."'>"."</td>
		<td>"."<img width='200' src='".$row["Photo3"]."'>"."</td>
		<td>"."<img width='200' src='".$row["Photo4"]."'>"."</td>
		<td>".$newdate."</td><td><a href=update.php?No=".$row["No"].">更新資料</a></td><td><a href=del.php?No=".$row["No"].">刪除資料</a></td>";
	echo "</tr>";
}
echo "</table>";

?> -->


<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>歡迎光臨小水獺</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/base.css" />
	<link rel="stylesheet" type="text/css" href="css/demo1.css" />
	<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("請使用支持CSS變量的瀏覽器來查看這個網頁 ex:chrome");</script>
</head>
<body class="demo-1" style="background-color: 		#FFEEDD">
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
			<div id="content-1" class="content content--switch content--switch-current" style="color: black">
				<h2 class="content__title">評價</h2><!-- 改 -->
				<div class="content__date">Since 2013</div><!-- 改 -->
				<div class="content__location">National University of Kaohsiung , NUK</div><!-- 改 -->
				<div id="content-1" class="content content--switch content--switch-current">
					<div class="htmleaf-container">
						<div class="container" style="padding: 30px 0;"><!-- 分頁模板 -->
							<!-- <h3>Table with sortable headings and global search</h3>
							<table id="sampleTableA" class="table table-striped sampleTable">
								<thead>
									<tr>
										<th>No</th>
										<th>type</th>
										<th>opinion</th>
										<th>date</th>
									</tr>
								</thead>
								<tbody>
									<?php   //table
										include("conn.php");
										$SQL="SELECT * FROM fix";
										$result= mysqli_query($con,$SQL);
										// echo "<table border='1'>";
										while ($row=mysqli_fetch_assoc($result)) {
										echo "<tr>";
										echo "<td>".$row["No"]."</td><td>".$row["type"]."</td><td>".$row["opinion"]."</td>
											<td>".$row["date"]."</td>";
										echo "</tr>";
									}
									echo "</table>";
									?>			
								</tbody>
							</table> -->


							<h3>Simple table with column search</h3>
							<table id="sampleTableB" class="table table-striped sampleTable">
							<thead>
									<tr>
										<th>No</th>
										<th>type</th>
										<th>opinion</th>
										<th>date</th>
										<th>rating</th>
									</tr>
								</thead>
								<tbody>
									<?php   //table
										include("conn.php");
										$SQL="SELECT * FROM fix WHERE process=100";
										$result= mysqli_query($con,$SQL);
										// echo "<table border='1'>";
										while ($row=mysqli_fetch_assoc($result)) {
										
										
										echo "<tr>";
										echo "<td>".$row["No"]."</td><td>".$row["type"]."</td><td>".$row["opinion"]."</td>
											<td>".$row["fdate"]."</td><td>".$row["rating"]."</td></tr>";
									}
									
									
									?>			
								</tbody>
							</table>
						</div>
					</div>
					<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
					<script src="https://cdn.jsdelivr.net/npm/js.geotools/dist/geotools.min.js"></script>
					<script src="https://cdn.jsdelivr.net/npm/js.geotools/dist/geotools-swedish-zipcodes.min.js"></script>
					<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
					<script src="./src/fancyTable.js"></script>
					<script type="text/javascript">
						// Word genarator
						function rWord(r){var t,n="bcdfghjklmnpqrstvwxyz",a="aeiou",e=function(r){return Math.floor(Math.random()*r)},o="";r=parseInt(r,10),n=n.split(""),a=a.split("");for(t=0;t<r/2;t++){var l=n[e(n.length)],p=a[e(a.length)];o+=0===t?l.toUpperCase():l,o+=2*t<r-1?p:""}return o}

						$(document).ready(function() {
							// Generate a big table   自己生資料的東西
							// for(var n=0;n<1000;n++){
							// 	var row = $("<tr>");
							// 	$("#sampleTableA").find("thead th").each(function() {
							// 		$("<td>",{
							// 			html: rWord(8),
							// 			style:"padding:2px;"
							// 		}).appendTo($(row));
							// 	});
							// 	row.appendTo($("#sampleTableA").find("tbody"));
							// }

							// And a simple one
							// for(var n=0;n<10;n++){
							// 	var row = $("<tr>");
							// 	for(var nn=0;nn<5;nn++){
							// 		$("<td>",{
							// 			html: rWord(8),
							// 			style:"padding:2px;"
							// 		}).appendTo($(row));
							// 	}
							// 	$(row).find("td:last").first().html(   moment(new Date(Math.floor(new Date().getTime()*Math.random()))).format('l')   );
							// 	row.appendTo($("#sampleTableB"));
							// }

							// And one with location data
							$('#getNavigatorLocation').bind("click",function(){
								window.navigator.geolocation.getCurrentPosition(function(pos) {
									var myLocation = new geotools().position(pos.coords.latitude, pos.coords.longitude);
									$("#sampleTableC").find("tbody tr").each(function() {
										var arr = $(this).find("td").eq(1).html().match(/([\-\d\.]+)/g);
										if(arr.length==2){
											var dest = new geotools().position(arr[0],arr[1]);
											$(this).find("td").eq(2).html((Math.round(myLocation.distanceTo(dest)/100)/10)+" km");
										}
									});
									$('#sampleTableC td:nth-child(3),#sampleTableC th:nth-child(3)').show();
									$("#sampleTableC")[0].fancyTable.sortColumn=2;
									$("#sampleTableC")[0].fancyTable.sortOrder=1;
									$.fn.fancyTable().tableSort($("#sampleTableC")[0]);
								});
							});
							$('#getZipCodeLocation').bind("click",function(){
								var myLocation = new geotools().position().fromZip($('#zipCode').val());
								if(!myLocation.latitude){
									return;
								}
								$("#sampleTableC").find("tbody tr").each(function() {
									var arr = $(this).find("td").eq(1).html().match(/([\-\d\.]+)/g);
									if(arr.length==2){
										var dest = new geotools().position(arr[0],arr[1]);
										$(this).find("td").eq(2).html((Math.round(myLocation.distanceTo(dest)/100)/10)+" km");
									}
								});
								$('#sampleTableC td:nth-child(3),#sampleTableC th:nth-child(3)').show();
								$("#sampleTableC")[0].fancyTable.sortColumn=2;
								$("#sampleTableC")[0].fancyTable.sortOrder=1;
								$.fn.fancyTable().tableSort($("#sampleTableC")[0]);
							});
							$('#sampleTableC td:nth-child(2),#sampleTableC th:nth-child(2)').hide();
							$('#sampleTableC td:nth-child(3),#sampleTableC th:nth-child(3)').hide();

							// // And make them fancy
							$("#sampleTableA").fancyTable({
								sortColumn:0,
								pagination: true,
								perPage:5,
								globalSearch:true
							});
							$("#sampleTableB").fancyTable({
								pagination: true,
								perPage:5
							});
							$("#sampleTableC").fancyTable({
								searchable: false
							});
						});
					</script><!-- 分頁 -->
				</div>
			</div>
			<!-- <div id="content-1" class="content content--switch content--switch-current">
				<h2 class="content__title">評價</h2>
				<div class="content__date">Since 2013</div>
				<div class="content__location">National University of Kaohsiung , NUK</div>
			</div> -->
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