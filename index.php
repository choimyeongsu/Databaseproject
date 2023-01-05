

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
		.bg_white {backgr	ound:#fff;}
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

		<title>메인 홈페이지</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

	</head>

<body bgcolor='yellow'>

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
								<font size="1px;" color="black">
								<h1>이 곳에서 원하시는 편의점의 모든 물건을 확인할 수 있습니다!<br />
								아래 로고 이미지를 클릭하거나 검색창을 통해 제품명을 검색해 보세요.</h2>
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

                <div id="search_box">
									<body>

												<h2>Search</h2>
									    	<form method="POST">
									        <input type="text" name="search" placeholder="     찾으시는 상품을 입력하세요." padding=10px style="width:1000px; border: solid 2px; border-radius: 8px;">
													<input type="submit" name="submit" value="검색">
											</form>
									</body>

									<?php

									if(isset($_POST["submit"])){
									    $str=$_POST["search"];

									    //데이터베이스에 쿼리 명령문을 보낸다
											$sth=$con->prepare("SELECT * FROM db WHERE name like '%$str%'");

									    //sth에 검색한 데이터를 데이터베이스에서 매칭해서 가져온다.
									    $sth->setFetchMode(PDO:: FETCH_OBJ);
									  	$sth->execute();
											$total = $sth->rowcount();
											?>
										<span style="font-weight: bold; font-size: 1.3em; line-height: 1.0em; color: green;" >
											총 검색 결과 수 : <?php echo $total ?>
										</span>



											<table>
												<thead>

													<tr style ="font-weight:bold;"	>
															<td width = "50" align = "center">상호명</td>
															<td width = "50" align = "center">카테고리</td>
															<td width = "200" align = "center">제품명</td>
															<td width = "100" align = "center">가격</td>
															<td width = "50" align = "center">제품특성</td>
													</tr>
												</thead>



											<tbody>
											<?php
									    while($row=$sth->fetch())
									    {
													if($total%2==0){
											?>
													<tr class = "even">
													<?php   }
													else{
												?>
														<tr>
													<?php } ?>

									                <td width = "50" align = "center" style ="font-weight:bold;"><?php echo $row->brand; ?></td>
									                <td width = "50" align = "center"><?php echo $row->tag; ?></td>
									                <td width = "200" align = "center"><?php echo $row->name; ?></td>
									                <td width = "100" align = "center"><?php echo $row->price; ?></td>
									                <td width = "50" align = "center"><?php
																	if($row->property!=0)	echo $row->property;
																	else echo " ";?></td>



									<?php
										$total--;
									    }

									        /*
									        else{
									            echo "Name does not exist";
									        }*/
									}

									?>
								</tbody>


								</table>

							</div>


										<div class="child-page-listing">

	  						  <h1>1. Stores</h1>

                  </div>
                          <a href="http://localhost/dbpj/stores/gs.php"><img src="image/gs25.png" height=224, width=224, style="border-radius:30%;"> </a>
                          <a href="http://localhost/dbpj/stores/cu.php"><img src="image/cu.png" height=224, width=224 style="border-radius:30%;"> </a>
                          <a href="http://localhost/dbpj/stores/seveneleven.php"><img src="image/seveneleven.png" height=224, width=224 style="border-radius:30%;"> </a>
													<a href="http://localhost/dbpj/stores/ministop.php"><img src="image/ministop.png" height=224, width=224 style="border-radius:30%;"> </a>
													<a href="http://localhost/dbpj/stores/emart24.php"><img src="image/emart24.png" height=224, width=224 style="border-radius:30%;"> </a>
													<body> <pre style="font-weight:bold;">	   GS25 	         CU	          SevenEleven	           MiniStop               Emart24</pre></body>

              </body>

								<h1>2. Sales & New Arrival </h1>
									<h2> - Sales </h2>
									<a href="http://localhost/dbpj/sales/gs.php"><img src="image/gs25.png" height=224, width=224, style="border-radius:30%;"></a>
												<a href="http://localhost/dbpj/sales/cu.php"><img src="image/cu.png" height=224, width=224, style="border-radius:30%;"></a>
												<a href="http://localhost/dbpj/sales/seveneleven.php"><img src="image/seveneleven.png" height=224, width=224, style="border-radius:30%;"></a>
												<a href="http://localhost/dbpj/sales/ministop.php"><img src="image/ministop.png" height=224, width=224, style="border-radius:30%;"></a>
												<a href="http://localhost/dbpj/sales/emart24.php"><img src="image/emart24.png" height=224, width=224, style="border-radius:30%;"></a>
												<body> <pre style="font-weight:bold;">	   GS25 	         CU	          SevenEleven	           MiniStop               Emart24</pre></body>

									<br></br>

									<h2> - New Arrivals </h2>
									<a href="http://localhost/dbpj/newarrivals/gs.php"><img src="image/gs25.png" height=224, width=224, style="border-radius:30%;"></a>
												<a href="http://localhost/dbpj/newarrivals/cu.php"><img src="image/cu.png" height=224, width=224, style="border-radius:30%;"></a>
												<a href="http://localhost/dbpj/newarrivals/seveneleven.php"><img src="image/seveneleven.png" height=224, width=224, style="border-radius:30%;"></a>
												<a href="http://localhost/dbpj/newarrivals/ministop.php"><img src="image/ministop.png" height=224, width=224, style="border-radius:30%;"></a>
												<a href="http://localhost/dbpj/newarrivals/emart24.php"><img src="image/emart24.png" height=224, width=224, style="border-radius:30%;"></a>
												<body> <pre style="font-weight:bold;">	   GS25 	         CU	          SevenEleven	           MiniStop               Emart24</pre></body>
								<br></br><h1>3. Good Tips </h2>
									<h2> - 간편식 추천 조합 Top3 </h2>
									<a href="http://localhost/dbpj/layout.php"><img src="image/gs25.png" height=224, width=224, style="border-radius:30%;"></a>
												<a href="http://localhost/dbpj/layout.php"><img src="image/cu.png" height=224, width=224, style="border-radius:30%;"></a>
												<a href="http://localhost/dbpj/layout.php"><img src="image/seveneleven.png" height=224, width=224, style="border-radius:30%;"></a>
												<a href="http://localhost/dbpj/layout.php"><img src="image/ministop.png" height=224, width=224, style="border-radius:30%;"></a>
												<a href="http://localhost/dbpj/layout.php"><img src="image/emart24.png" height=224, width=224, style="border-radius:30%;"></a>
												<body> <pre style="font-weight:bold;">	   GS25 	         CU	          SevenEleven	           MiniStop               Emart24</pre></body>

									<br></br>





		               <h1>4. Nearest Store By My Location</h2>
										</head>


										<body>
										<div class="map_wrap">
										    <div id="map" style="width:100%;height:110%;position:relative;overflow:hidden;"></div>

										    <div id="menu_wrap" class="bg_white">
										        <div class="option">
										            <div>
										                <form onsubmit="searchPlaces(); return false;">
										                    키워드 : <input type="text" value="전북대 편의점" id="keyword" size="15">
										                    <button type="submit">' 검 색  '</button>
										                </form>
										            </div>
										        </div>
										        <hr>
										        <ul id="placesList"></ul>
										        <div id="pagination"></div>
										    </div>
										</div>

										<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=e3cb966c441d663176e06364fe5fc244&libraries=services"></script>
										<script>
										// 마커를 담을 배열입니다
										var markers = [];

										var mapContainer = document.getElementById('map'), // 지도를 표시할 div
										    mapOption = {
										        center: new kakao.maps.LatLng(35.84704, 127.13451), // 지도의 중심좌표
										        level: 10 // 지도의 확대 레벨
										    };

										// 지도를 생성합니다
										var map = new kakao.maps.Map(mapContainer, mapOption);

										// 장소 검색 객체를 생성합니다
										var ps = new kakao.maps.services.Places();

										// 검색 결과 목록이나 마커를 클릭했을 때 장소명을 표출할 인포윈도우를 생성합니다
										var infowindow = new kakao.maps.InfoWindow({zIndex:1});

										// 키워드로 장소를 검색합니다
										searchPlaces();

										// 키워드 검색을 요청하는 함수입니다
										function searchPlaces() {

										    var keyword = document.getElementById('keyword').value;

										    if (!keyword.replace(/^\s+|\s+$/g, '')) {
										        return false;
										    }

										    // 장소검색 객체를 통해 키워드로 장소검색을 요청합니다
										    ps.keywordSearch( keyword, placesSearchCB);
										}

										// 장소검색이 완료됐을 때 호출되는 콜백함수 입니다
										function placesSearchCB(data, status, pagination) {
										    if (status === kakao.maps.services.Status.OK) {

										        // 정상적으로 검색이 완료됐으면
										        // 검색 목록과 마커를 표출합니다
										        displayPlaces(data);

										        // 페이지 번호를 표출합니다
										        displayPagination(pagination);

										    } else if (status === kakao.maps.services.Status.ZERO_RESULT) {

										        alert('검색 결과가 존재하지 않습니다.');
										        return;

										    } else if (status === kakao.maps.services.Status.ERROR) {

										        alert('검색 결과 중 오류가 발생했습니다.');
										        return;

										    }
										}

										// 검색 결과 목록과 마커를 표출하는 함수입니다
										function displayPlaces(places) {

										    var listEl = document.getElementById('placesList'),
										    menuEl = document.getElementById('menu_wrap'),
										    fragment = document.createDocumentFragment(),
										    bounds = new kakao.maps.LatLngBounds(),
										    listStr = '';

										    // 검색 결과 목록에 추가된 항목들을 제거합니다
										    removeAllChildNods(listEl);

										    // 지도에 표시되고 있는 마커를 제거합니다
										    removeMarker();

										    for ( var i=0; i<places.length; i++ ) {

										        // 마커를 생성하고 지도에 표시합니다
										        var placePosition = new kakao.maps.LatLng(places[i].y, places[i].x),
										            marker = addMarker(placePosition, i),
										            itemEl = getListItem(i, places[i]); // 검색 결과 항목 Element를 생성합니다

										        // 검색된 장소 위치를 기준으로 지도 범위를 재설정하기위해
										        // LatLngBounds 객체에 좌표를 추가합니다
										        bounds.extend(placePosition);

										        // 마커와 검색결과 항목에 mouseover 했을때
										        // 해당 장소에 인포윈도우에 장소명을 표시합니다
										        // mouseout 했을 때는 인포윈도우를 닫습니다
										        (function(marker, title) {
										            kakao.maps.event.addListener(marker, 'mouseover', function() {
										                displayInfowindow(marker, title);
										            });

										            kakao.maps.event.addListener(marker, 'mouseout', function() {
										                infowindow.close();
										            });

										            itemEl.onmouseover =  function () {
										                displayInfowindow(marker, title);
										            };

										            itemEl.onmouseout =  function () {
										                infowindow.close();
										            };
										        })(marker, places[i].place_name);

										        fragment.appendChild(itemEl);
										    }

										    // 검색결과 항목들을 검색결과 목록 Element에 추가합니다
										    listEl.appendChild(fragment);
										    menuEl.scrollTop = 0;

										    // 검색된 장소 위치를 기준으로 지도 범위를 재설정합니다
										    map.setBounds(bounds);
										}

										// 검색결과 항목을 Element로 반환하는 함수입니다
										function getListItem(index, places) {

										    var el = document.createElement('li'),
										    itemStr = '<span class="markerbg marker_' + (index+1) + '"></span>' +
										                '<div class="info">' +
										                '   <h5>' + places.place_name + '</h5>';

										    if (places.road_address_name) {
										        itemStr += '    <span>' + places.road_address_name + '</span>' +
										                    '   <span class="jibun gray">' +  places.address_name  + '</span>';
										    } else {
										        itemStr += '    <span>' +  places.address_name  + '</span>';
										    }

										      itemStr += '  <span class="tel">' + places.phone  + '</span>' +
										                '</div>';

										    el.innerHTML = itemStr;
										    el.className = 'item';

										    return el;
										}

										// 마커를 생성하고 지도 위에 마커를 표시하는 함수입니다
										function addMarker(position, idx, title) {
										    var imageSrc = 'https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/marker_number_blue.png', // 마커 이미지 url, 스프라이트 이미지를 씁니다
										        imageSize = new kakao.maps.Size(36, 37),  // 마커 이미지의 크기
										        imgOptions =  {
										            spriteSize : new kakao.maps.Size(36, 691), // 스프라이트 이미지의 크기
										            spriteOrigin : new kakao.maps.Point(0, (idx*46)+10), // 스프라이트 이미지 중 사용할 영역의 좌상단 좌표
										            offset: new kakao.maps.Point(13, 37) // 마커 좌표에 일치시킬 이미지 내에서의 좌표
										        },
										        markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imgOptions),
										            marker = new kakao.maps.Marker({
										            position: position, // 마커의 위치
										            image: markerImage
										        });

										    marker.setMap(map); // 지도 위에 마커를 표출합니다
										    markers.push(marker);  // 배열에 생성된 마커를 추가합니다

										    return marker;
										}

										// 지도 위에 표시되고 있는 마커를 모두 제거합니다
										function removeMarker() {
										    for ( var i = 0; i < markers.length; i++ ) {
										        markers[i].setMap(null);
										    }
										    markers = [];
										}

										// 검색결과 목록 하단에 페이지번호를 표시는 함수입니다
										function displayPagination(pagination) {
										    var paginationEl = document.getElementById('pagination'),
										        fragment = document.createDocumentFragment(),
										        i;

										    // 기존에 추가된 페이지번호를 삭제합니다
										    while (paginationEl.hasChildNodes()) {
										        paginationEl.removeChild (paginationEl.lastChild);
										    }

										    for (i=1; i<=pagination.last; i++) {
										        var el = document.createElement('a');
										        el.href = "#";
										        el.innerHTML = i;

										        if (i===pagination.current) {
										            el.className = 'on';
										        } else {
										            el.onclick = (function(i) {
										                return function() {
										                    pagination.gotoPage(i);
										                }
										            })(i);
										        }

										        fragment.appendChild(el);
										    }
										    paginationEl.appendChild(fragment);
										}

										// 검색결과 목록 또는 마커를 클릭했을 때 호출되는 함수입니다
										// 인포윈도우에 장소명을 표시합니다
										function displayInfowindow(marker, title) {
										    var content = '<div style="padding:5px;z-index:1;">' + title + '</div>';

										    infowindow.setContent(content);
										    infowindow.open(map, marker);
										}

										 // 검색결과 목록의 자식 Element를 제거하는 함수입니다
										function removeAllChildNods(el) {
										    while (el.hasChildNodes()) {
										        el.removeChild (el.lastChild);
										    }
										}
										</script>
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
								<li>2022 DB Project / 편의점 상품 확인 웹 애플리케이션</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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

</body>
</html>
