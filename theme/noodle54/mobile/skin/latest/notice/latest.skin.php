<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 10);
?>

<div class="notice">
    <h2><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></h2>
    <ul>
	    <?php for ($i=0; $i<count($list); $i++) {  ?>
	    <li>
	        <?php
	        if ($list[$i]['icon_secret']) echo "<span class=\"lock_icon\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i></span> ";
	         //echo $list[$i]['icon_reply']." ";
	        echo "<a href=\"".$list[$i]['href']."\">";
	        if ($list[$i]['is_notice'])
	            echo "<strong>".$list[$i]['subject']."</strong>";
	        else
	            echo $list[$i]['subject'];
	
	        // if ($list[$i]['comment_cnt'])
	            // echo $list[$i]['comment_cnt'];
			
			if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
	        echo "</a>";
			?>
	    </li>
	    <?php }  ?>
	    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
	    <li class="empty_li">게시물이 없습니다.</li>
	    <?php }  ?>
    </ul>
</div>
