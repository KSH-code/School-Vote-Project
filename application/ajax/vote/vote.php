<?php
/**
 * Created by PhpStorm.
 * User: young
 * Date: 2017-06-27
 * Time: 오후 6:08
 */
//관리자인지 아닌지 체크
//투표한 번호가 유효한지 체크
//투표!
$vote = $_POST['voteData']['president'];
if (!is_admin()) {
    echo json_encode(array('result' => false, 'message' => "관리자는 투표가 불가능합니다"));
} else {
    echo json_encode(array('result' => true, 'message' => "투표가 완료되었습니다!"));
}