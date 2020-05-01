<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 210;
$thumb_height = 150;
?>
<link rel="stylesheet" href="<?php echo $latest_skin_url;?>/glider.css">
<script src="<?php echo $latest_skin_url;?>/glider.js"></script>
<div class="pic_lt">
    <h2 class="lat_title"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>"><?php echo $bo_subject ?></a></h2>
    <div class="glider-contain">
        <div class="glider">
    <?php
    for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    ?>
        <div>
            <a href="<?php echo $list[$i]['href'] ?>"><?php echo $img_content; ?></a>
        </div>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
        </div>
        <button class="glider-prev">&laquo;</button>
        <button class="glider-next">&raquo;</button>
        <div id="dots"></div>
    </div>
    <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span><i class="fa fa-plus" aria-hidden="true"></i><span class="sound_only"> 더보기</span></a>

</div>
<script>
window.addEventListener('load',function(){
document.querySelector('.glider').addEventListener('glider-slide-visible', function(event){
var glider = Glider(this);
console.log('Slide Visible %s', event.detail.slide)
});
document.querySelector('.glider').addEventListener('glider-slide-hidden', function(event){
console.log('Slide Hidden %s', event.detail.slide)
});
document.querySelector('.glider').addEventListener('glider-refresh', function(event){
console.log('Refresh')
});
document.querySelector('.glider').addEventListener('glider-loaded', function(event){
console.log('Loaded')
});

window._ = new Glider(document.querySelector('.glider'), {
slidesToShow: 1, //'auto',
slidesToScroll: 1,
itemWidth: 150,
draggable: true,
scrollLock: false,
dots: '#dots',
rewind: true,
arrows: {
    prev: '.glider-prev',
    next: '.glider-next'
},
responsive: [
    {
        breakpoint: 800,
        settings: {
            slidesToScroll: 'auto',
            itemWidth: 300,
            slidesToShow: 'auto',
            exactWidth: true
        }
    },
    {
        breakpoint: 700,
        settings: {
            slidesToScroll: 4,
            slidesToShow: 4,
            dots: false,
            arrows: false,
        }
    },
    {
        breakpoint: 600,
        settings: {
            slidesToScroll: 3,
            slidesToShow: 3
        }
    },
    {
        breakpoint: 500,
        settings: {
            slidesToScroll: 2,
            slidesToShow: 2,
            dots: false,
            arrows: false,
            scrollLock: true
        }
    }
]
});
});
</script>
