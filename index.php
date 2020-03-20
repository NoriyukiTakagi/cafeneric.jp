<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <title>カフェ・ネリック</title>
	<link rel="stylesheet" href="./styles/top.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css">
	<link rel="stylesheet" href="js/slick.css" type="text/css">
	<link rel="stylesheet" href="js/slick-theme.css" type="text/css">
	<script src="./js/jquery-3.4.1.min.js"></script>
	<script src="./js/slick.min.js"></script>
	<script src="./js/common.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
</head>
<body>
<!--ヘッダー共通-->
<?php
	include('./header_common.html'); //header_common.htmlをインクルード
?>
<!--トップページメイン-->
	<main>
		<div id="mainVisual">
			<div class="mainVisualText">
				<h1>カフェ・ネリック<br>リニューアルオープン記念<br>キャンペーン</h1>
				<p>2020.1.31まで開催中</p>
				<a href="#"><img src="images/sale_visual_min.jpg" alt="コーヒー半額キャンペーンバナー"></a>
			</div>
			<article>
				<ul>
					<li>2020.01.12　喫茶「カフェ・ネリック」本日、リニューアルオープンいたしました</li>
					<li><a href="#"><img src="images/dtmore.svg" alt="news履歴開閉アイコン"></a></li>
				</ul>
			</article>
		</div>
		<section id="topics">
			<div class="topics_wrap">
				<h2>Topics</h2>
				<p>～トピックス～</p>
				<div id="topics_grid">
					<article>
						<h3>今後の予定</h3>
						<a href="#"><img src="images/topicks_after.jpg" alt="今後の予定"></a>
						<p><a href="#">2020.01.12<br>近日中にカフェネリック通販サイトオープンいたします。</a></p>
					</article>
					<article>
						<h3>キャンペーン情報</h3>
						<a href="#"><img src="images/topicks_sale01.jpg" alt="キャンペーン情報"></a>
						<p><a href="#">2020.01.12<br>期間限定で対象商品をお試し価格にて提供中</a></p>
					</article>
					<article>
						<h3>キャンペーン情報</h3>
						<a href="#"><img src="images/topicks_sale02.jpg" alt="キャンペーン情報"></a>
						<p><a href="#">2020.01.12<br>リニューアルオープン記念、ネリックコーヒーを「半額」にて提供中！</a></p>
					</article>
					<article>
						<h3>お知らせ</h3>
						<a href="#access"><img src="images/topicks_news.jpg" alt="お知らせ"></a>
						<p><a href="#access">2020.01.12<br>「カフェ・ネリック」リニューアルオープン！！新店舗の場所はこちら</a></p>
					</article>
				</div>
				<p class="common_btn"><a href="#">過去のトピックスをみる</a></p>
			</div>
		</section>
		<section id="menuPickup">
			<div class="menuPickup">
				<h2>MenuPickup</h2>
				<p>～おすすめメニュー～</p>
				<p>期間限定でお試し価格にて提供中！</p>
				<ul class="slick-slider">
					<li><img src="images/tagliatelle_pasta.jpg" alt="野菜パスタ・タリアテッレ"></li>
					<li><img src="images/remon_cheesecake.jpg" alt="レモンライムレアチーズケーキ"></li>
					<li><img src="images/remon_glass_tea.jpg" alt="レモングラスティ"></li>
				</ul>
				<p class="common_btn" id="menu_link_btn"><a href="#">すべてのメニューをみる</a></p>
			</div>
		</section>
		<section id="aboutUs">
			<div class="aboutUs">
				<h2>About Us</h2>
				<p>～新しくなったカフェ・ネリック～</p>
				<p>リニューアルしても美味しいコーヒーをお手頃な価格で</p>
				<p>カフェ・ネリックは昭和から続いている昔ながらの隠れ家のような喫茶店です。<br>
					時代も令和に変わり思い切ってリニューアルいたしました。 それとともに新たに公式サイトを立ち上げ、より一層身近なものとなりました。 メニューも一新しバリエーションも増え、マスターが一杯一杯丁寧に入れていくスタイルは昔と変わっておりません。 これからも当店自慢のおいしいコーヒーやケーキを提供できるよう一層サービスに磨きをかけてまいりますのでよろしくお願いいたします。</p>
				<p class="common_btn"><a href="#">カフェネリックの魅力</a></p>
			</div>
		</section>
		<section id="access">
			<div class="access_wrap">
				<h2>Access</h2>
				<p>～店舗情報～</p>
				<div id="access_grid">
					<div class="access_text">
						<h3>カフェ・ネリック</h3>
						<dl>
							<dt>住所</dt>
							<dd>東京都練馬区光が丘4丁目18番地1号</dd>
							<dt>アクセス</dt>
							<dd>都営大江戸線「光が丘駅」A3出口から徒歩5分</dd>
							<dt>座席数</dt>
							<dd>店内30席＋テラス8席</dd>
							<dt>営業時間</dt>
							<dd>10：00～20：00</dd>
							<dt>Tel</dt>
							<dd>03-6757-xxxx</dd>
							<dt>定休日</dt>
							<dd>毎週水曜日</dd>
							<dt>駐車場</dt>
							<dd>有（3台）</dd>
							<dt>駐輪場</dt>
							<dd>有</dd>
							<dt>Free Wi-Fi利用できます</dt>
						</dl>
					</div>
					<div class="access_img">
						<a href="images/acssessmap_modal1200.jpg" data-lightbox="group" width="820"><img src="images/acssessmap_modal1200.jpg" alt="アクセスマップ画像" width="460"></a>
						<p>画像をクリックすると拡大表示します。</p>
					</div>
				</div>

				<p class="common_btn"><a href="#">Google Mapで確認する</a></p>
			</div>
		</section>
	</main>
<!--フッターー共通-->
<?php
	include('./footer_common.html'); //footer_common.htmlをインクルード
?>
<script>
	$(function() {
		$('.slick-slider').slick({
			centerMode:true,
			centerPadding: '35%',
			autoplay: true,
			autoplaySpeed: 5000,
			dots:true,
			arrows: true,

		});
	});
</script>
</body>
</html>
