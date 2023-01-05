

<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<style>
		.map_wrap, .map_wrap * {margin:0;padding:0;font-family:'Malgun Gothic',dotum,'돋움',sans-serif;font-size:12px}
		.map_wrap a, .map_wrap a:hover, .map_wrap a:active{color:#000;text-decoration: none}
		.map_wrap {position:relative;width:100%;height:500px}
		#menu_wrap {position:absolute;top:0;left:0;bottom:0;width:250px;margin:10px 0 30px 10px;padding:5px;overflow-y:auto;background:rgba(255, 255, 255, 0.7);z-index: 1;font-size:12px;border-radius: 10px !important}
		.bg_white {background:#fff;}
		#menu_wrap hr {display: block; height: 1px;border: 0; border-top: 2px solid #5F5F5F;margin:3px 0;}
		#menu_wrap .option{text-align: center;}
		#menu_wrap .option p {margin:10px 0;}
		#menu_wrap .option button {margin-left:5px;}
		#placesList li {list-style: none;}
		#placesList .item {position:relative;border-bottom:1px solid #888;overflow: hidden;cursor: pointer;min-height: 65px;}
		#placesList .item span {display: block;margin-top:4px;}
		#placesList .item h5, #placesList .item .info {text-overflow: ellipsis;overflow: hidden;white-space: nowrap;}
		#placesList .item .info{padding:10px 0 10px 55px;}
		#placesList .info .gray {color:#8a8a8a;}
		#placesList .info .jibun {padding-left:26px;background:url(https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/places_jibun.png) no-repeat;}
		#placesList .info .tel {color:#009900;}
		#placesList .item .markerbg {float:left;position:absolute;width:36px; height:37px;margin:10px 0 0 10px;background:url(https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/marker_number_blue.png) no-repeat;}
		#placesList .item .marker_1 {background-position: 0 -10px;}
		#placesList .item .marker_2 {background-position: 0 -56px;}
		#placesList .item .marker_3 {background-position: 0 -102px}
		#placesList .item .marker_4 {background-position: 0 -148px;}
		#placesList .item .marker_5 {background-position: 0 -194px;}
		#placesList .item .marker_6 {background-position: 0 -240px;}
		#placesList .item .marker_7 {background-position: 0 -286px;}
		#placesList .item .marker_8 {background-position: 0 -332px;}
		#placesList .item .marker_9 {background-position: 0 -378px;}
		#placesList .item .marker_10 {background-position: 0 -423px;}
		#placesList .item .marker_11 {background-position: 0 -470px;}
		#placesList .item .marker_12 {background-position: 0 -516px;}
		#placesList.item .marker_13 {background-position: 0 -562px;}
		#placesList .item .marker_14 {background-position: 0 -608px;}
		#placesList .item .marker_15 {background-position: 0 -654px;}
		#pagination {margin:10px auto;text-align: center;}
		#pagination a {display:inline-block;margin-right:10px;}
		#pagination .on {font-weight: bold; cursor: default;color:#777;}
		</style>

		<title>신상품 확인 페이지</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

	</head>
	<body class="home color-azure" color="black">

</body>

	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" >


												<div class="inner">
														<a href="index.php"><div class="inner"><a href="index.php"><h1>
							<span class="symbol"><img src="https://cdn-icons-png.flaticon.com/512/6490/6490332.png" height=60, width=60></span><span style="color:#ed4132; font-size:80px;" class="title">&nbsp; 2022 DB PROJECT</span></h1></a>

															<h1 style="color:#000000; font-size:50px;">편의점 상품 확인 Web Application</h1>

														<!-- Nav -->
													 <nav>
															<ul>
																 <li><a href="#menu">Menu</a></li>
															</ul>
													 </nav>


												</div>
					</header>



				<!-- Menu -->
				<nav id="menu">
					<h2>Menu</h2>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li> 편의점 바로가기
						<ul>
						<li><a href="http://gs25.gsretail.com/">GS25 홈페이지</a></li>
						<li><a href="http://cu.bgfretail.com">CU 홈페이지</a></li>
						<li><a href="http://www.7-eleven.co.kr/">SevenEleven 홈페이지</a></li>
						<li><a href="http://www.ministop.co.kr">Ministop 홈페이지</a></li>
						<li><a href="https://emart24.co.kr/">Emart24 홈페이지</a></li>
					</ul> </li>
						<li><a href="sale.php">세일 상품 확인</a></li>
						<li><a href="newarrival.php">신상품 확인</a></li>
						<li><a href="layout.php">편의점 추천조합</a></li>
					</ul>
				</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>

								<font size="2px;" color="black">
								<h1>NEW ARRIVALS</h1>
							</font>

							</header>
              <body>

								<?php
								$serverName="localhost";
								$username="root";
								$password="rlaehddnd0422@";
								try{
								$con=new PDO("mysql:host=$serverName; dbname=PROJECT", $username, $password);
								$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

								}
								catch(PDOException $e)
								{
								    echo "PDO 연결 실패" . $e->getMessage();
								} ?>



                <h1> - Stores </h1>
								<a href="http://localhost/dbpj/sales/gs.php"><img src="image/gs25.png" height=224, width=224, style="border-radius:30%;"></a>
											<a href="http://localhost/dbpj/sales/cu.php"><img src="image/cu.png" height=224, width=224, style="border-radius:30%;"></a>
											<a href="http://localhost/dbpj/sales/seveneleven.php"><img src="image/seveneleven.png" height=224, width=224, style="border-radius:30%;"></a>
											<a href="http://localhost/dbpj/sales/ministop.php"><img src="image/ministop.png" height=224, width=224, style="border-radius:30%;"></a>
											<a href="http://localhost/dbpj/sales/emart24.php"><img src="image/emart24.png" height=224, width=224, style="border-radius:30%;"></a>
											<body> <pre style="font-weight:bold;">	   GS25 	         CU	          SevenEleven	           MiniStop               Emart24</pre></body>
                <br></br>
              </body>
               </div>


				</div>


				<!-- Footer -->
					<footer id="footer">
						<div class="inner">

							<section>
								<h1>문의</h1>
								<h3> 김동웅 </h3>
									 <body>- Phone Number : 010-6609-6301 <br></br>- Email : rlaehddnd0422@naver.com</body>
									 <br></br>
								 <h3> 최명수 </h3>
	 								 <body>- Phone Number : 010-4938-6762 <br></br> - Email : chlaudtn0257@naver.com</body>
							</section>

							<ul class="copyright">
								<li>2022 DB 프로젝트 / 편의점 상품 확인 웹 애플리케이션</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
