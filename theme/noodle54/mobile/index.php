<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<!-- 메인배너 { -->

<section id="sbn_idx" class="sbn">
	<?php echo latest('slider_baner', 'mainbanner', 3, 23);?>
</section>
<!-- } 메인배너 -->
<div id="container">
<section id="idx_ct">
    <div class="idx_cnt">
        <div class="col50">
            <!-- 공지사항 -->
            <div class="notice">
            <?php
            // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
            // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
            // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
            echo latest('theme/notice', 'notice', 5, 25);
            ?>
            </div>
            <!-- 매장안내 -->

            <div id="contact" class="contact secondbox">
                  <?php
                // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
                // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
                $options = array(
                    'thumb_width'    => 500, // 썸네일 width
                    'thumb_height'   => 300,  // 썸네일 height
                    'content_length' => 0   // 간단내용 길이
                );
                echo latest('theme/basic', 'hugi', 9, 25, 1, $options);
                ?>
            </div>


        </div>

        <!-- 상품 -->
        <div class="col50">
            <div class="item item1">
                <?php
                // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
                // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
                $options = array(
                    'thumb_width'    => 500, // 썸네일 width
                    'thumb_height'   => 300,  // 썸네일 height
                    'content_length' => 0   // 간단내용 길이
                );
                echo latest('theme/basic2', 'item', 9, 25, 1, $options);
                ?>
			</div>
        </div>
    </div>

	<div class="idx_cnt">
		<!-- 이벤트 -->
        <div class="col100">
			<?php
				echo latest('/slider_baner2', 'gallery', 4, 23);
    		?>

        </div>
        <!-- 최신글 -->
        <div class="col100">
            <div class="food food1 col50 secondbox">
                <?php
                // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
                // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
                $options = array(
                    'thumb_width'    => 500, // 썸네일 width
                    'thumb_height'   => 300,  // 썸네일 height
                    'content_length' => 0   // 간단내용 길이
                );
                echo latest('theme/basic', 'after', 9, 25, 1, $options);
                ?>
			</div>
          	<div class="food food2 col50">
<div id="map" style="width:100%;height:314px;"></div>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=803924b54c5d0d95535021e2af63b0ec"></script>
<!--https://developers.kakao.com/에서 REST API 키: ***************49dc 발급받아서 입력-->

<!--참고페이지: http://apis.map.daum.net/web/sample/addr2coord/-->
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div
    mapOption = {
        center: new daum.maps.LatLng(37.562577, 127.075910), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };

var map = new daum.maps.Map(mapContainer, mapOption);

// 마커가 표시될 위치입니다
var markerPosition  = new daum.maps.LatLng(37.562577, 127.075910);

// 마커를 생성합니다
var marker = new daum.maps.Marker({
    position: markerPosition
});

// 마커가 지도 위에 표시되도록 설정합니다
marker.setMap(map);

var iwContent = '<div style="padding:5px;">플래이캣<br><a href="http://map.daum.net/link/map/Hello World!,37.562577, 127.075910" style="color:blue" target="_blank">큰지도보기</a> <a href="http://map.daum.net/link/to/Hello World!,37.562577, 127.075910" style="color:blue" target="_blank">길찾기</a></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwPosition = new daum.maps.LatLng(37.562577, 127.075910); //인포윈도우 표시 위치입니다

// 인포윈도우를 생성합니다
var infowindow = new daum.maps.InfoWindow({
    position : iwPosition,
    content : iwContent
});

// 마커 위에 인포윈도우를 표시합니다. 두번째 파라미터인 marker를 넣어주지 않으면 지도 위에 표시됩니다
infowindow.open(map, marker);
</script>
			</div>
        </div>
    </div>
</section>
</div>
<div id="kakao">
	<a href="https://open.kakao.com/o/srgiw08b">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 208 191.94"><g><polygon class="cls-1" points="76.01 89.49 87.99 89.49 87.99 89.49 82 72.47 76.01 89.49"/><path class="cls-1" d="M104,0C46.56,0,0,36.71,0,82c0,29.28,19.47,55,48.75,69.48-1.59,5.49-10.24,35.34-10.58,37.69,0,0-.21,1.76.93,2.43a3.14,3.14,0,0,0,2.48.15c3.28-.46,38-24.81,44-29A131.56,131.56,0,0,0,104,164c57.44,0,104-36.71,104-82S161.44,0,104,0ZM52.53,69.27c-.13,11.6.1,23.8-.09,35.22-.06,3.65-2.16,4.74-5,5.78a1.88,1.88,0,0,1-1,.07c-3.25-.64-5.84-1.8-5.92-5.84-.23-11.41.07-23.63-.09-35.23-2.75-.11-6.67.11-9.22,0-3.54-.23-6-2.48-5.85-5.83s1.94-5.76,5.91-5.82c9.38-.14,21-.14,30.38,0,4,.06,5.78,2.48,5.9,5.82s-2.3,5.6-5.83,5.83C59.2,69.38,55.29,69.16,52.53,69.27Zm50.4,40.45a9.24,9.24,0,0,1-3.82.83c-2.5,0-4.41-1-5-2.65l-3-7.78H72.85l-3,7.78c-.58,1.63-2.49,2.65-5,2.65a9.16,9.16,0,0,1-3.81-.83c-1.66-.76-3.25-2.86-1.43-8.52L74,63.42a9,9,0,0,1,8-5.92,9.07,9.07,0,0,1,8,5.93l14.34,37.76C106.17,106.86,104.58,109,102.93,109.72Zm30.32,0H114a5.64,5.64,0,0,1-5.75-5.5V63.5a6.13,6.13,0,0,1,12.25,0V98.75h12.75a5.51,5.51,0,1,1,0,11Zm47-4.52A6,6,0,0,1,169.49,108L155.42,89.37l-2.08,2.08v13.09a6,6,0,0,1-12,0v-41a6,6,0,0,1,12,0V76.4l16.74-16.74a4.64,4.64,0,0,1,3.33-1.34,6.08,6.08,0,0,1,5.9,5.58A4.7,4.7,0,0,1,178,67.55L164.3,81.22l14.77,19.57A6,6,0,0,1,180.22,105.23Z"/></g></svg>
</a>
</div>

<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=YOUR_CLIENT_ID&callback=initMap"></script>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>
