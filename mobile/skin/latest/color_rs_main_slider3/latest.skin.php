<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$img_w = 1280; // 큰 이미지($img) 가로 크기
$img_h = 600; // 큰 이미지($img) 세로 크기

?>

<link rel="stylesheet" href="<?=$latest_skin_url?>/css/style.css">

<section class="slider-container">
	<ul id="slider" class="slider-wrapper">
		<?php
		for($i=0; $i<count($list); $i++){
			$thumbs = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $img_w, $img_h);
		if($thumbs['src']) {
			$img = $thumbs['src'];
			}?>
		<li class="slide-current">
			<a title="<?=$list[$i]['subject']?>" href="<?php echo $list[$i]['href'];?>" target="_self"><img width="100%" height="<?=$img_h?>" src="<?=$img?>" alt="<?=$list[$i]['subject']?>" /></a>
			<div class="caption">
				<a title="<?=$list[$i]['subject']?>" href="<?php echo $list[$i]['href'];?>" target="_self"><h3 class="caption-title"><?=$list[$i]['subject']?></h3>
				<p><?php echo mb_strimwidth($list[$i]['wr_content'], '0', '50', '', 'utf-8');?></p></a>
			</div>
		</li>
		<?}?>
	</ul>

	<div class="shadow"></div>
	<ul id="slider-controls" class="slider-controls"></ul>
</section>

<script src="<?=$latest_skin_url?>/js/main.js"></script>
