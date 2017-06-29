<?php

// VALUES
function v(&$var, $val = '')
{
    return !empty($var) ? $var : $val;
}

// CHECK
function is_ajax()
{
    return v($_SERVER['HTTP_X_REQUESTED_WITH'], false) === 'XMLHttpRequest';
}

function is_login()
{
    return array_key_exists('idx', $_SESSION);
}

function is_admin()
{
    if(is_login()) {
        return $_SESSION['lv'] == 1;
    }else {
        return false;
    }
}


// PAGE CONTROLL
function msg($msg)
{
    echo sprintf('<script>alert("%s")</script>', $msg);
}

function href($location)
{
    echo sprintf('<script>location.href="%s"</script>', $location);
}

function move($msg, $location)
{
    msg($msg);
    href($location);
}
