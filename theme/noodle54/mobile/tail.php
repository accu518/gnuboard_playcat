<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
	</div>
    <?php if (!defined("_INDEX_")) { ?></div> <?php } ?>
</div>


<div id="ft">
    <div id="ft_wr">
        <ul id="ft_menu">
            <li><a href="<?php echo G5_BBS_URL ?>/faq.php">FAQ</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/qalist.php">1:1문의</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/new.php">새글</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/current_connect.php" class="visit">접속자 <strong class="visit-num"><?php echo connect('theme/basic'); // 현재 접속자수  ?></strong></a></li>
        </ul>
        <?php echo visit('theme/basic'); // 방문자수 ?>
        <div id="ft_link">
			<a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
			<a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
			<a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
		</div>
		<h2>지원자정보</h2>
		<p class="ft_info">
			이름 : 이효민<br>
	주소  : 경기도 안산시 단원구 선부로 166 (122-1207)<br>
	전화번호  : 0102026815
    </div>

    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    <?php
    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전으로 보기</a>
    <?php
    }

    if ($config['cf_analytics']) {
        echo $config['cf_analytics'];
    }
    ?>
</div>
<script>
jQuery(function($) {

    $( document ).ready( function() {

        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));

        //상단고정
        if( $(".top").length ){
            var jbOffset = $(".top").offset();
            $( window ).scroll( function() {
                if ( $( document ).scrollTop() > jbOffset.top ) {
                    $( '.top' ).addClass( 'fixed' );
                }
                else {
                    $( '.top' ).removeClass( 'fixed' );
                }
            });
        }

        //상단으로
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });

    });
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
