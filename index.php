<?php  
	session_start();
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>お問い合わせ</title>
		<link rel="stylesheet" href="alslife0831.css">
		<link href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" rel="stylesheet">
		<link rel="icon" type="image/png" href="image/_MG_3273_0420032814.png">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7766872001628441"
     crossorigin="anonymous"></script>
	</head>

	<body>
		
		<header  class="contact1">
			<nav class="contact2">
				<div class="header">
					<img src="image/_MG_3273_0420032814.png" class="header-img">
						<div id= "menu"class="hitem"><a href="index.html">HOME</a></div>
						<div id= "menu"class="hitem"><a href="BLOG.html">BLOG</a></div>
						<div id= "menu"class="hitem"><a href="PHOTOS.html">PHOTOS</a></div>    
						<div id= "menu"class="hitem"><a href="CONTACT.html">CONTACT</a></div>
						
						<div class="hitem"><a href="https://twitter.com/ALslife2?s=09"><i class="fab fa-twitter fa-2x"></i></a></div>
						<div class="hitem"><a href="https://youtube.com/channel/UC50UTsAHXxBeAr9U9H8c6iw"><i class="fab fa-youtube fa-2x"></i></a></div>
						<div class="hitem"><a href="https://www.instagram.com/al08162020/"><i class="fab fa-instagram fa-2x"></i></a></div>
				</div>
				
			</nav>
			<div id="pcpicture">
				<h2 class="title">AL'slife</h2>
				<p class="subtitle">～保護猫ALの日常～</p>
			</div>
			<nav class="smafonav">
				<div id="hamburg">
						
      					<div class="smafomenu"><input id="input" type="checkbox">
      					
      						<label id="nothomelabel1" for="input"><div class="nothomeline1"></div><div class="nothomeline2"></div><div class="nothomeline3"></div></label>
      						<div class="smafonothome">
							<div class="sitem"><a href="index.html">HOME</a></div>
							<div class="sitem"><a href="BLOG.html">BLOG</a></div>
							<div class="sitem"><a href="PHOTOS.html">PHOTOS</a></div>    
							<div class="sitem"><a href="CONTACT.html">CONTACT</a></div>
							<div class="sitem"><a href="https://twitter.com/ALslife2?s=09">Twitter</a></div>
							<div class="sitem"><a href="https://youtube.com/channel/UC50UTsAHXxBeAr9U9H8c6iw">Youtube</a></div>
							<div class="sitem"><a href="https://www.instagram.com/al08162020/">Instagram</a></div>
						</div></div>
						<div class="space"></div>
						<div><img src="image/_MG_3273_0420032814.png"  class="smafologo"></div>

				</div>
			</nav>
<!--ヘッダーに表示させるもの-->		
			<div class="smafopicture">
				<h2 class="title">AL'slife</h2>
				<p class="subtitle">～保護猫ALの日常～</p>
			</div>	
<!--ホームページのタイトル-->	
		</header>
		<div class="middle">
		<main>
			<h2 class="confirm2">お問い合わせの確認</h2>
			<div class="confirm3">
				<?php

				//名前を表示する//
				echo "<div class='al1'><div class='al'>お名前:&emsp;</div>" . htmlspecialchars($_POST["name"]) . "</div>";

				//メールアドレスを表示する//
				echo "<div class='al1'><div class='al'>メールアドレス:&emsp;</div>" . htmlspecialchars($_POST["email"]) . "</div>";

				//お問い合わせ内容を表示する//
				echo "<div class='al1'><div class='al'>お問い合わせ内容<br></div>" . htmlspecialchars($_POST["opinion"]) . "</div>";

				//$_SESSIONに入力データを保存する
				$_SESSION["name"] = $_POST["name"];
				$_SESSION["email"] = $_POST["email"];
				$_SESSION["opinion"] = $_POST["opinion"];

				?>
			
				
			</div>
				<p class="al2">この内容で送信してもよろしいでしょうか？</p>
			<div class="buttonposition">	
				<button class="buttoncontact" onclick="history.back();">修正する</button>
				<button class="buttoncontact" onclick="location.href= 'mail.php'">送信する</button>
			</div>
	</main>
<!--メインに表示させるもの-->
		<aside class="pcaside">
				<h3 class="side1">ALのプロフィール</h3>
				<img src="image/_MG_3273_0420032814.png">
				<p class="profile"><br>腕や足を噛んだり家の物で<br>いたずらするのが大好きな<br>
								1歳の女の子です。<br>
								よろしくお願いします🐱<br>
								<span id="redfont">※写真は2ヶ月のエルを使用しています※</span>
				</p>
				<h3 class="side2">新着記事</h3>
				<ul class="newpost">
					<li class="new"><a href="AL'slife1.html">【AL'slifeホームページ開設】</a></li>
					<!--<li class="new"><a href="AL2.html">段ボール大好きなAL</a></li>
					<li class="new"><a href="AL3.html">おやつで喜ぶAL</a></li>-->
				</ul>
		</aside>

		</div>
		<!--
		<div id="google">
			<div class="adsence"><p class="google">広告</p></div>
			<div class="adsence"><p class="google">広告</p></div>
		</div>
		-->
		<aside class="smafoaside">
			<h3 class="side1">ALのプロフィール</h3>
			<img src="image/_MG_3273_0420032814.png">
			<p class="profile"><br>腕や足を噛んだり家の物で<br>いたずらするのが大好きな<br>
								1歳の女の子です。<br>
								よろしくお願いします🐱<br>
								<span id="redfont">※写真は2ヶ月のエルを使用しています※</span>
			</p>
			<h3 class="side2">新着記事</h3>
			<ul class="newpost">
			<li class="new"><a href="AL'slife1.html">【AL'slifeホームページ開設】</a></li>
			<!--<li class="new"><a href="AL2.html">段ボール大好きなAL</a></li>
			<li class="new"><a href="AL3.html">おやつで喜ぶAL</a></li>-->
			</ul>
		</aside>

		<footer>
			<div class="foot">
				<p><small>&copy; 2021 AL'slife.net</small></p>
			</div>
		</footer>
	</body>	
</html>
