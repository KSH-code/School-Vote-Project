<?php
/**
 * Created by PhpStorm.
 * User: young
 * Date: 2017-06-25
 * Time: 오후 12:33
 */
$result = $db->exe("SELECT * FROM `user` WHERE `id` = ? AND `pw` = ?",array($_POST['id'],$_POST['pw']))->fetch();
if (is_array($result)) {
    $_SESSION['idx'] = $result['idx'];
    $_SESSION['id'] = $result['id'];
    $_SESSION['pw'] = $result['pw'];
    echo json_encode(array('result' => true));
} else {
    echo json_encode(array('result' => false));
}

