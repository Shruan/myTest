<?php
/**
 * Created by PhpStorm.
 * User: Qiushiyuan
 * Date: 2017/4/9
 * Time: 16:54
 */

function checkLoginStatus()
{
    if (session('?id')) {
        return true;
    }
    return false;
}

function alert($msg, $type = 'error', $url = '')
{
    header("Content-type:text/html;charset=utf-8");
    switch ($type) {
        case 'error':
            echo '<script>alert(\'' . $msg . '\');history.go(-1)</script>';
            break;
        case 'success':
            echo '<script>alert(\'' . $msg . '\');</script>';
            redirect($url);
            break;
        default:
            echo '<script>alert(\'' . $msg . '\');history.go(-1)</script>';
            break;
    }
}