<?php
include_once('./_common.php'); //공통변수 common.php 호출

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/consult.php');
    return;
}

if (G5_IS_MOBILE) { //태마가 모바일에 있다면
    include_once(G5_MOBILE_PATH.'/consult.php');
    return;
}


include_once(G5_PATH.'/head.php');
?>

<?php
include_once(G5_PATH.'/tail.php');
?>
