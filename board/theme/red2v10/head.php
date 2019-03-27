<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- navbar-expand-md 로 변경해야
태블릿에서 메뉴가 나옴 -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark d-print-none"><!-- fixed-top -->
<?//php echo G5_URL ?>
  <a class="navbar-brand" href="<?php echo G5_URL ?>/" title="Red2.net 홈">
    <!-- <img src="img/red2mamm.svg" width="85" height="70" alt=""> -->
	<!-- <img src="<?php echo G5_THEME_IMG_URL; ?>/red2mamm.svg" width="65" height="65" alt="로고"> -->
    <span>Red2.</span>net
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle main-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          메인
        </a>
        <div class="dropdown-menu main-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=news">뉴스</a>
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">공지사항</a>
          <!-- <a class="dropdown-item" href="#">게임 리그</a> -->
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://red2.net/dokuwiki/doku.php">위키</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          게임
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">타이베리안돈</a>
          <a class="dropdown-item" href="#">타이베리안선</a>
          <a class="dropdown-item" href="#">타이베리움워</a>
          <a class="dropdown-item" href="#">C&amp;C4</a>
          <a class="dropdown-item" href="#">레드얼럿</a>
          <a class="dropdown-item" href="#">레드얼럿2</a>
          <a class="dropdown-item" href="#">레드얼럿3</a>
          <a class="dropdown-item" href="#">제너럴</a>
          <a class="dropdown-item" href="#">레니게이드</a>
          <a class="dropdown-item" href="#">솔서바이버</a>
        </div>
      </li> -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          컨텐츠
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">모드 강좌</a>
          <a class="dropdown-item" href="#">실험실</a>
          <a class="dropdown-item" href="#">C&amp;C 백과사전</a>
          <a class="dropdown-item" href="#">레드넷 용어사전</a>
        </div>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle comm-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          커뮤니티
        </a>
        <div class="dropdown-menu comm-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=free">자유 게시판</a>
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=cnc">C&amp;C 게시판</a>
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=qna">Q&amp;A 게시판</a>
		  <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=movie">동영상 게시판</a>
		  <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=tip">팁게시판</a>
		  <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=mod_tutorial">모드 강좌</a>
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=comic">팬픽</a>
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=suggest">건의사항</a>
          <a class="dropdown-item" href="../../comm/link.html">링크</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle down-link nav-link-last" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          자료실
        </a>
        <div class="dropdown-menu down-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=patch">패치</a>
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=mod">모드</a>
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=mod_tool">모드 툴</a>
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=map">맵</a>
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=replay">리플레이</a>
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=ost">OST</a>
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=game">게임</a>
          <a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=other">기타</a>
        </div>
      </li>
      <!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          사이트
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">건의사항</a>
          <a class="dropdown-item" href="#">운영자 게시판</a>
          <a class="dropdown-item" href="#">휴지통</a>
          <a class="dropdown-item" href="#">링크</a>
        </div>
      </li>
      -->
    </ul>

<!--
<div class="outlogin-m">
  <a href="#">로그인</a> / <a href="#">회원가입</a>
</div>
-->

<?php echo outlogin('theme/red2m'); ?>

<!-- Google 검색 -->
<form action="http://www.google.co.kr" id="cse-search-box" class="" role="search">
  <div>
    <input type="hidden" name="cx" value="partner-pub-4096343605930509:6706445990">
    <input type="hidden" name="ie" value="UTF-8">
    <input type="text" name="q" id="cse-keyword" title="검색어 입력">
    <input type="submit" name="sa" id="cse-search-button" value="&#xac80;&#xc0c9;">
  </div>
</form>

<script type="text/javascript" src="http://www.google.co.kr/coop/cse/brand?form=cse-search-box&amp;lang=ko"></script>

<!--
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">검색</button>
    </form>
-->
  </div>
</nav>

<!-- 참고: http://ganzi-tilong.tistory.com/17 -->
<!-- 참고: https://getbootstrap.com/docs/4.0/layout/grid/#order-classes -->
<div class="container div-border">
  <div class="row row-remove-bug">
    <section class="col-md-9"><!-- col-md-9 order-2 -->
      <!-- col-md-9 본문 -->

