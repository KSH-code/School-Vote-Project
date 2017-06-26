<?php

header('content-type:text/html; charset=utf-8');
session_start();

require('/lib/function.php');
require('/lib/config.php');
require('/lib/dbconfig.php');

if (is_ajax()) {
    require(PATH . 'ajax/' . CONTROLLER . '/' . METHOD . '.php');
} else {
    if (MODE === 'view') {
        require(PATH . 'view/html/header.php');
        if (CONTROLLER === 'none' && METHOD === 'none') {
            require(PATH . 'view/html/main.php');
        } else {
            if (is_file(PATH . 'view/' . CONTROLLER . '/' . METHOD . '.php')) {
                require(PATH . 'view/' . CONTROLLER . '/' . METHOD . '.php');
            } else {
                require(PATH . 'view/html/error.php');
            }
        }
        require(PATH . 'view/html/footer.php');
    } else {
        require(PATH . 'action/' . CONTROLLER . '/' . METHOD . '.php');
    }
}