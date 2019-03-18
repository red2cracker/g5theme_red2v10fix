<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>

<div class="latest_wr_rwd">
<?php echo latest('theme/red2v2', 'news', 4, 24); ?>
<?php echo latest('theme/red2v2', 'notice', 4, 24); ?>
</div>

<div class="latest_wr_rwd">
<?php echo latest('theme/red2v2', 'free', 4, 24); ?>
<?php echo latest('theme/red2v2', 'cnc', 4, 24); ?>
</div>

<div class="latest_wr_rwd">
<?php echo latest('theme/red2v2', 'qna', 4, 24); ?>
<?php echo latest('theme/red2v2', 'mod', 4, 24); ?>
</div>

<div class="latest_wr_rwd">
<?php echo latest('theme/red2v2', 'tip', 4, 24); ?>
<?php echo latest('theme/red2v2', 'mod_tutorial', 4, 24); ?>
</div>



<!-- SNS 링크(목록대신 문단과 | 사용) -->
<!-- https://www.youtube.com/yt/about/brand-resources/#logos-icons-colors -->
<ul class="sns-link">
  <li class="sns_logo_twitter"><a href="https://twitter.com/red2cracker" title="트위터">트위터</a></li>
  <li class="sns_logo_facebook"><a href="https://www.facebook.com/red2network/">페이스북</a></li>
  <li class="sns_logo_blog"><a href="http://blog.naver.com/scabbard2" title="블로그">블로그</a></li>
  <li class="sns_logo_youtube"><a href="http://www.youtube.com/red2cracker" title="유튜브">유튜브</a></li>
  <li class="sns_logo_discord"><a href="https://discord.gg/F5ZcCwC" title="디스코드">디스코드</a></li>
  <li class="sns_logo_moddb"><a href="http://www.moddb.com/mods/korean-war-2" title="모드DB">모드DB</a></li>
</ul>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>