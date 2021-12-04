<?php

function abort($status = 404)
{
    require "./../app/view/errors/$status.php";
    exit();
}

function pretty($arr, $is_die = false)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';

    if ($is_die) die();
}

function view($view, $data = [])
{
    extract($data);

    require "../app/view/layouts/master.php";
}

function asset($path = '')
{
    return APP_URL . trim($path, '/');
}

function url($url = '')
{
    return APP_URL . trim($url, '/');
}

function redirect($url = '')
{
    if ($url) {
        $location = APP_URL . trim($url, '/');
        header("location: $location");
        die();
    }
}

function session_get($key)
{
    if ($key && isset($_SESSION[$key])) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : '';
    }
}

function session_set($key = '', $value = '')
{
    if ($key && $value) {
        $_SESSION[$key] = $value;
    }
}

function session_has($key)
{
    return isset($_SESSION[$key]);
}

function session_del($key = '')
{
    if ($key && isset($_SESSION[$key])) {
        unset($_SESSION[$key]);
    }
}
