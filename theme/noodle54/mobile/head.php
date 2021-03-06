<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/latest_all.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<script src="https://kit.fontawesome.com/9149ee47ff.js" crossorigin="anonymous"></script>
<header id="hd">
  <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

  <div class="to_content"><a href="#container">본문 바로가기</a></div>

  <?php
  if(defined('_INDEX_')) { // index에서만 실행
    include G5_MOBILE_PATH.'/newwin.inc.php'; // 팝업레이어
  } ?>

  <nav id="hd_top">
    <h2>최상단 고정 카테고리</h2>

    <!-- 상단 기본 고정 메뉴 -->
    <ul class="hd_top_nav scrollbar">
      <div id="container">
      <?php if ($is_member) { ?>
        <?php if ($is_admin) { ?>
          <li><a href="<?php echo G5_ADMIN_URL ?>" id="snb_adm">관리자</a></li>
        <?php } ?>
        <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php" id="snb_modify">정보수정</a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/logout.php" id="snb_logout">로그아웃</a></li>
      <?php } else { ?>
        <li><a href="<?php echo G5_BBS_URL ?>/register.php" id="snb_join">회원가입</a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/login.php" id="snb_login">로그인</a></li>
      <?php } ?>
      </div>
    </ul>

    <!-- 로고 -->

    <div id="logo">
      <a class="logo1" href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo_kr.svg" alt="<?php echo $config['cf_title']; ?>"></a>
      <a class="logo2" href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.svg" alt="<?php echo $config['cf_title']; ?>"></a>
      <div id="box1" class="box"></div>
      <div id="box2" class="box"></div>
      <div id="box3" class="box"></div>
      <div id="box4" class="box"></div>
      <div id="box5" class="box"></div>
      <div id="box6" class="box"></div>
      <div id="box7" class="box"></div>
      <div id="box8" class="box"></div>
      <div id="box9" class="box"></div>
      <div id="box10" class="box"></div>
      <div id="box11" class="box"></div>
      <div id="box12" class="box"></div>
      <div id="box13" class="box"></div>
      <div id="box14" class="box"></div>
      <div id="box15" class="box"></div>
      <div id="box16" class="box"></div>
      <div id="box17" class="box"></div>
      <div id="box18" class="box"></div>
    </div>
    <!--sns-->
    <ul id="sns">
      <li><a href="https://www.youtube.com/channel/UCuxRQY8gs3OiQPA2qI83_7w"><i class="fab fa-youtube fa-3x"></i></a></li>
      <li><a href="https://www.instagram.com/playcat.kr/"><i class="fab fa-instagram-square fa-3x"></i></a></li>
      <li><a href="https://www.facebook.com/playcat.kr"><i class="fab fa-facebook-square fa-3x"></i></a></li>
    </ul>

    <!-- 메뉴바 -->
    <div id="gnb_bar" class="scrollbar">
      <div class="gnb_bar_inner">
        <ul class="gnb_basic">
          <?php
          $menu_datas = get_menu_db(1, true);
          $i = 0;
          foreach( $menu_datas as $row ){
            if( empty($row) ) continue;
            ?>
            <li class="gnb_1dli">
              <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
            </li>
            <?php
          }

          if ($i == 0) {  ?>
            <li id="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하세요.<?php } ?></li>
          <?php } ?>
        </ul>

        <button type="button" id="gnb_open" class="hd_opener"><i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only"> 메뉴열기</span></button>
        <div id="side_hd" class="hd_div">
          <button type="button" id="gnb_close" class="hd_closer"><span class="sound_only">메뉴 닫기</span><i class="fa fa-times" aria-hidden="true"></i></button>
          <?php echo outlogin('theme/basic'); // 외부 로그인 ?>
          <ul id="gnb_1dul">
            <?php
            $menu_datas = get_menu_db(1, true);
            $i = 0;
            foreach( $menu_datas as $row ){
              if( empty($row) ) continue;
              ?>
              <li class="gnb_1dli">
                <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                <?php
                $k = 0;
                foreach( (array) $row['sub'] as $row2 ){
                  if( empty($row2) ) continue;

                  if($k == 0)
                  echo '<button type="button" class="btn_gnb_op"><span class="sound_only">하위분류</span></button><ul class="gnb_2dul">'.PHP_EOL;
                  ?>
                  <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><span></span><?php echo $row2['me_name'] ?></a></li>
                  <?php
                  $k++;
                }	//end foreach $row2

                if($k > 0)
                echo '</ul>'.PHP_EOL;
                ?>
              </li>
              <?php
              $i++;
            }	//end foreach $row

            if ($i == 0) {  ?>
              <li id="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하세요.<?php } ?></li>
            <?php } ?>
          </ul>
          <div id="text_size">
            <!-- font_resize('엘리먼트id', '제거할 class', '추가할 class'); -->
            <button id="size_down" onclick="font_resize('container', 'ts_up ts_up2', '', this);" class="select"><img src="<?php echo G5_URL; ?>/img/ts01.png" width="20" alt="기본"></button>
            <button id="size_def" onclick="font_resize('container', 'ts_up ts_up2', 'ts_up', this);"><img src="<?php echo G5_URL; ?>/img/ts02.png" width="20" alt="크게"></button>
            <button id="size_up" onclick="font_resize('container', 'ts_up ts_up2', 'ts_up2', this);"><img src="<?php echo G5_URL; ?>/img/ts03.png" width="20" alt="더크게"></button>
          </div>
        </div>

        <button type="button" id="user_btn" class="sch_toggle"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색창</span></button>
        <?php echo poll('theme/basic'); // 설문조사 ?>
        <div class="sch_div" id="user_menu">
          <button type="button" id="user_close" class="hd_closer"><span class="sound_only">메뉴 닫기</span><i class="fa fa-times" aria-hidden="true"></i></button>
          <div id="hd_sch">
            <h2>사이트 내 전체검색</h2>
            <form name="fsearchbox" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);" method="get">
              <input type="hidden" name="sfl" value="wr_subject||wr_content">
              <input type="hidden" name="sop" value="and">
              <input type="text" name="stx" id="sch_stx" placeholder="검색어를 입력해주세요" required maxlength="20">
              <button type="submit" value="검색" id="sch_submit"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
            </form>
            <script>
            function fsearchbox_submit(f)
            {
              if (f.stx.value.length < 2) {
                alert("검색어는 두글자 이상 입력하십시오.");
                f.stx.select();
                f.stx.focus();
                return false;
              }

              // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
              var cnt = 0;
              for (var i=0; i<f.stx.value.length; i++) {
                if (f.stx.value.charAt(i) == ' ')
                cnt++;
              }

              if (cnt > 1) {
                alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                f.stx.select();
                f.stx.focus();
                return false;
              }

              return true;
            }
            </script>
          </div>
          <?php echo popular('theme/basic'); // 인기검색어 ?>
        </div>

        <script>
        $(function () {
          //폰트 크기 조정 위치 지정
          var font_resize_class = get_cookie("ck_font_resize_add_class");
          if( font_resize_class == 'ts_up' ){
            $("#text_size button").removeClass("select");
            $("#size_def").addClass("select");
          } else if (font_resize_class == 'ts_up2') {
            $("#text_size button").removeClass("select");
            $("#size_up").addClass("select");
          }

          $(".hd_opener").on("click", function() {
            var $this = $(this);
            var $hd_layer = $this.next(".hd_div");

            if($hd_layer.is(":visible")) {
              $hd_layer.hide();
              $this.find("span").text("열기");
            } else {
              var $hd_layer2 = $(".hd_div:visible");
              $hd_layer2.prev(".hd_opener").find("span").text("열기");
              $hd_layer2.hide();

              $hd_layer.show();
              $this.find("span").text("닫기");
            }
          });

          $("#container").on("click", function() {
            $(".hd_div").hide();

          });

          $(".btn_gnb_op").click(function(){
            $(this).toggleClass("btn_gnb_cl").next(".gnb_2dul").slideToggle(300);

          });

          $(".hd_closer").on("click", function() {
            var idx = $(".hd_closer").index($(this));
            $(".hd_div:visible").hide();
            $(".hd_opener:eq("+idx+")").find("span").text("열기");
          });

          $(".sch_toggle").click(function(){
            $(".sch_div").toggle();
          });
          $("#user_close").click(function(){
            $(".sch_div").hide();
          });
        });
        </script>
        <script>
        $(function(){
          var lastScroll = 0;
          $(window).scroll(function(event){
            var scroll = $(this).scrollTop();
            if (scroll > 130){
              //이벤트를 적용시킬 스크롤 높이
              $(".scrollbar").addClass("scrolldown");
            }
            else {
              $(".scrollbar").removeClass("scrolldown");
            }
            lastScroll = scroll;
          });
        });
      </script>
    </div>

  </div>
</nav>
</header>

<div id="wrapper">

  <?php if (!defined("_INDEX_")) { ?>
    <div id="container">
      <h2 id="container_title" class="top" title="<?php echo get_text($g5['title']); ?>">
        <?php echo get_head_title($g5['title']); ?>
      </h2>
    <?php } ?>
    <div id="container_ct">
