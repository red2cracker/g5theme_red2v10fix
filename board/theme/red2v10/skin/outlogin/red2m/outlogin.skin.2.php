<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/style.css">', 0);
?>

<!-- 로그인 후 아웃로그인 시작 { -->
<section id="ol_after_m" class="ol_m">
    <header id="ol_after_hd_m">
        <h2>나의 회원정보</h2>
        <strong><?php echo $nick ?>님</strong>
        <?php if ($is_admin == 'super' || $is_auth) {  ?><a href="<?php echo G5_ADMIN_URL ?>" class="btn_admin">관리자</a><?php }  ?>
    </header>
    <div id="ol_after_private_m">
            <a href="<?php echo G5_BBS_URL ?>/memo.php" target="_blank" id="ol_after_memo_m" class="win_memo_m">
                <span class="sound_only">안 읽은 </span>쪽지
                <strong><?php echo $memo_not_read ?></strong>
            </a>
    </div>

	<!--
    <ul id="ol_after_private_m" class="list-unstyled">
        <li>
            <a href="<?php echo G5_BBS_URL ?>/memo.php" target="_blank" id="ol_after_memo" class="win_memo">
                <span class="sound_only">안 읽은 </span>쪽지
                <strong><?php echo $memo_not_read ?></strong>
            </a>
        </li>
    </ul>
    -->

    <footer id="ol_after_ft_m">
		<a href="<?php echo G5_BBS_URL ?>/logout.php?url=<?=$urlencode?>" id="ol_after_logout_m">로그아웃</a>
        <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php" id="ol_after_info_m">정보수정</a>
    </footer>
</section>

<script>
// 탈퇴의 경우 아래 코드를 연동하시면 됩니다.
function member_leave()
{
    if (confirm("정말 회원에서 탈퇴 하시겠습니까?"))
        location.href = "<?php echo G5_BBS_URL ?>/member_confirm.php?url=member_leave.php";
}
</script>
<!-- } 로그인 후 아웃로그인 끝 -->
