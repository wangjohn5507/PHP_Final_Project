<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>歡迎光臨小水獺</title>
	<link rel="stylesheet" type="text/css" href="css/base.css" />
	<link rel="stylesheet" type="text/css" href="css/demo1.css" />
	<link rel="stylesheet" type="text/css" href="css/normalize1.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link href="css/tastySelect.css" rel="stylesheet" type="text/css">
	<link href="css/pushy-buttons.css" rel="stylesheet">
	<script src="js/tastySelect.min.js"></script>
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
			<div id="content-1" style="margin-left: 100px;padding-top: 50px">
				<h2 class="content__title" style="font-size: 80px;color:white">加入小水獺</h2><!-- 改 -->
				<div class="content__date" style="color: white">Join Us</div><!-- 改 -->
				<div class="content__location" style="color:white">歡迎加入小水獺，如果你願意成為我們一員的話，請填寫底下的表單，填寫完我們將會寄信向您確認，並且會將您的資料進入審查，您將會第一時間知道結果！</div><!-- 改 -->
			</div>
			<form action="joincheck.php" method="post" enctype="multipart/form-data">
			<div style="margin-left: 90px; position: relative">
				<span class="input input--hoshi" style="font-size: 30px">
					<input class="input__field input__field--hoshi" type="text" id="input-4" name="Name" required />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
						<span >名字</span>
					</label>
				</span>
				<span class="input input--hoshi" style="font-size: 30px">
					<input class="input__field input__field--hoshi" type="text" id="input-5" name="phone" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
						<span >電話號碼</span>
					</label>
				</span>
				<span class="input input--hoshi" style="font-size: 30px">
					<input class="input__field input__field--hoshi" type="text" id="input-6" name="gender" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-3" for="input-6">
						<span >性別</span>
					</label>
				</span>
				<span class="input input--hoshi" style="font-size: 30px">
					<input class="input__field input__field--hoshi" type="text" id="input-4" name="email" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
						<span >電子信箱</span>
					</label>
				</span>
				<span class="input input--hoshi" style="font-size: 30px">
					<input class="input__field input__field--hoshi" type="text" id="input-5" name="reason" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
						<span >請說說為什麼想加入小水獺?</span>
					</label>
				</span>
				<span class="input input--hoshi" style="font-size: 30px">
					<input class="input__field input__field--hoshi" type="text" id="input-6" name="experience" required/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-3" for="input-6">
						<span >有任何修車經驗嗎?</span>
					</label>
				</span>
				<div style="position: absolute;left: 0">
						<input type="submit" a class="btn btn--md btn--blue" >
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