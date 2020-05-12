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
				echo latest('/slider_baner2', 'after', 4, 23);
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
                echo latest('theme/basic', 'free', 9, 25, 1, $options);
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


<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=YOUR_CLIENT_ID&callback=initMap"></script>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>
