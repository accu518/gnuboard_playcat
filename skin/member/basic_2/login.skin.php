<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<style>
#content_title { display:inline-block; width:100%; margin-top:30px; font-family:"tahoma", sans-serif; text-align:center; }
#content_title > div { font-size:11px; color:#7b7b7b; margin-top:19px; text-transform:capitalize; }
.ctt_title_mgn { margin-top:49px !important; }
.lct_home { padding-left:18px; background:url('<?php echo $member_skin_url; ?>/img/ico_home.png') left top no-repeat; }
.lct_home > a { font-weight:bold; color:#7b7b7b; }
.lct_arw { margin:0 2px 0 3px; }

#flogin { display:table; width:570px; margin:74px auto 0 auto; font-family:"tahoma", sans-serif; }

.fl_ipt_wrap { display:inline-block; }
.fl_ipt_div { float:left; width:410px; }
.fl_ipt_div > input, .fl_ipt_login { float:left; margin:5px; }
.fl_ipt { width:358px; height:50px; padding:0 21px; line-height:50px; background:#f0f0f0; border:none; font-size:18px; color:#878787; }
.fl_ipt_login { width:150px; height:110px; background:#f0f0f0; font-size:0; border:none; background:url('<?php echo $member_skin_url; ?>/img/btn_login.jpg') no-repeat; cursor:pointer; }

.fl_chk_div { width:560px; margin:10px auto 0 auto; }

.fl_chk_wrap { font-size:14px; color:#c1c1c1; margin:0 9px 0 2px; cursor:pointer; }
.fl_chk_wrap span { position:relative; top:1px; }
.fl_chk_wrap .fl_chk_icon { display:inline-block; width:22px; height:22px; background:url('<?php echo $member_skin_url; ?>/img/bg_chk.jpg') left top no-repeat; margin-right:8px; vertical-align:middle; transition-duration:.3s; }
.fl_chk_wrap input[type=checkbox] { display:none; }
.fl_chk_wrap input[type=checkbox]:checked + .fl_chk_icon { background-image:url('<?php echo $member_skin_url; ?>/img/bg_chk_on.jpg'); }
.fl_chk_txt { color:#656565 !important; transition-duration:.3s; }

.fl_sns_login { display:inline-block; width:570px; margin:11px auto 0 auto; }
.fl_sns_login > a { float:right; margin:0 5px; }

.fl_bt_wrap { display:inline-block; width:560px; margin:28px 0 0 5px; padding-top:17px; border-top:solid 2px #221e1f; }
.fl_bt_lost { float:left; }
.fl_bt_register { float:right; }
.fl_bt_wrap > a { text-decoration:underline; font-size:13px; color:#7b7b7b; }
</style>

<div id="content_title">

	<p><img src="<?php echo $member_skin_url; ?>/img/title.jpg"></p>

	<div>

		<span class="lct_home"><a href="<?php echo G5_SHOP_URL ?>/">HOME</a></span>
		<span class="lct_arw">></span>
		Membership
		<span class="lct_arw">></span>
		Login
	</div>

</div>

<!-- login start -->

<form id="flogin" name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
<input type="hidden" name="url" value="<?php echo $login_url ?>">

<div class="fl_ipt_wrap">

	<div class="fl_ipt_div">
		<input type="text" name="mb_id" id="login_id" required class="fl_ipt" size="20" maxLength="20" placeholder="ID">
		<input type="password" name="mb_password" id="login_pw" required class="fl_ipt" size="20" maxLength="20" placeholder="Password">
	</div>

	<input type="submit" class="fl_ipt_login">

</div>

<div class="fl_chk_div">

	<label for="login_save_id" class="fl_chk_wrap"><input type="checkbox" name="save_id" id="login_save_id"><i class="fl_chk_icon"></i><span>save ID</span></label>
	<label for="login_auto_login" class="fl_chk_wrap"><input type="checkbox" name="auto_login" id="login_auto_login"><i class="fl_chk_icon"></i><span>Auto Login</span></label>

</div>

<div class="fl_sns_login">
	<a href="#"><img src="<?php echo $member_skin_url; ?>/img/btn_login_g.jpg"></a>
	<a href="#"><img src="<?php echo $member_skin_url; ?>/img/btn_login_f.jpg"></a>
</div>

<div class="fl_bt_wrap">

	<a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" id="login_password_lost" class="fl_bt_lost">Forgot your password?</a>
	<a href="<?php echo G5_BBS_URL ?>/register.php" class="fl_bt_register">Don’t have a domain.com account?</a>

</div>

</form>

<script>
function flogin_submit(f)
{
    return true;
}
</script>

<!-- login end -->