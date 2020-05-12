<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<div id="map" class="companymap" style="width:500px;height:500px;"></div>

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

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>
