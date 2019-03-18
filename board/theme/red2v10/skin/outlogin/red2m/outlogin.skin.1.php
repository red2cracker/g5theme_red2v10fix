<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/style.css">', 0);
?>

<!-- 로그인 전 아웃로그인 시작 { -->
<section id="ol_before_m">
  <div>
    <a href="<?php echo G5_BBS_URL ?>/login.php?url=<?=$urlencode?>">로그인</a> / 
    <a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a>
  </div>
</section>

<!-- 로그인후 이전페이지로 넘어가게 하는 방법
https://sir.kr/qa/91664 -->

<!-- } 로그인 전 아웃로그인 끝 -->
