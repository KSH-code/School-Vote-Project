<?php
/**
 * Created by PhpStorm.
 * User: young
 * Date: 2017-06-25
 * Time: 오후 12:33
 */
$result = $db->exe("SELECT * FROM `user` WHERE `id` = ? AND `pw` = ?"
    , array($_POST['id'], $_POST['pw']))->fetchAll();

print_r($result);
//if () {
//    echo json_encode(array('result' => true, 'id' => $result['id'], "pw" => "pw"));
//} else {
//    echo json_encode(array('result' => false));
//}

