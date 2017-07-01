<?php
/**
 * Created by PhpStorm.
 * User: young
 * Date: 2017-06-30
 * Time: 오전 7:00
 */
print_r($_FILES['poster']);
$tmp = $_FILES['poster']['tmp_name'];
//ajax를 알아내면 ajax로 작업을 하고 안되면 걍 action으로 해서 처리하는 걸로
$target_url = "uploads/";
$target_file = $target_url.basename($_FILES["poster"]["name"]);
echo "<br/>" . $target_file . "<br/>";
if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {

} else {
    echo "Sorry, there was an error uploading your file.";
}
