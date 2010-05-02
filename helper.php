<?php

function post($key, $default='')
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }
    return $default;
}

function get($key, $default='')
{
    if (isset($_GET[$key])) {
        return $_GET[$key];
    }
    return $default;
}
