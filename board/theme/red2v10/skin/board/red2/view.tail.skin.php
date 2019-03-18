<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// 최신글로 끌어올림
if ($_GET['cmd'] == 'move_up') {
    if (!$is_admin) {
        // 자신의 글이 아니라면
        if ($member['mb_id'] != $write['mb_id']) {
            alert('자신의 글만 끌어올림을 사용할 수 있습니다.');
        }

        // 끌어올림 허용 레벨이 아니라면
        if ($member['mb_level'] < $moveup_level) {
            alert('끌어올림 권한이 없습니다.');
        }

        // 끌어올림 허용 시간이 아니라면
        if ($moveup_date > G5_TIME_YMDHIS) {
            alert('끌어올림이 가능 한 시간이 아닙니다.');
        }

        // 포인트 차감
        if ($member['mb_point'] < $moveup_point) {
            alert('포인트가 부족합니다.');
        }
        insert_point($member['mb_id'], $moveup_point * (-1), "{$board['bo_subject']} {$wr_id} 끌어올림");
    }

    $wr_num = get_next_num($write_table);

    // 원글 최신글로 날짜도 현재시간으로
    sql_fetch(" update {$write_table} set wr_num = '{$wr_num}',wr_datetime = '".G5_TIME_YMDHIS."' where wr_id = '{$view[wr_id]}' ");

    // 최신글 캐시 갱신
    delete_cache_latest($bo_table);

    // 끌어올림 후 목록으로 이동
    goto_url('./board.php?bo_table='.$bo_table);
}
?>