<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<!-- 최신글 끝 -->

    </section>

    <aside class="col-md-3"><!-- col-md-3 order-1 -->
      <!-- col-md-3 사이드바 -->

<?php echo outlogin('theme/red2'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
	  
<!--
<form class="outlogin">
  <div class="form-group">
    <label for="exampleInputId1" class="sr-only">아이디</label>
    <input type="text" class="form-control" id="exampleInputId1" placeholder="아이디">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="sr-only">비밀번호</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="비밀번호">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      자동 로그인
    </label>
  </div>

  <button type="submit" class="btn btn-primary btn-login">로그인</button>

  <ul class="outlogin-register">
    <li><a href="#">회원가입</a></li>
    <li><a href="#">아이디/비번찾기</a></li>
  </ul>
</form>

-->

      <nav class="nav-local d-print-none">
        <h2>자료실</h2>

        <ul>
          <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=patch">패치</a></li>
          <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=mod">모드</a></li>
		  <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=mod_tool">모드 툴</a></li>
		  <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=map">맵</a></li>
		  <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=replay">리플레이</a></li>
		  <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=ost">OST</a></li>
		  <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=game">게임</a></li>
		  <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=other">기타</a></li>
        </ul>
      </nav>

	  

	  
	  
	  
	  
	  
	  
	  
    </aside>
  </div>
</div>

<?php
include_once(G5_THEME_PATH.'/footer.php');
?>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>