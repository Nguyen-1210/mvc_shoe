<?php
$web_root = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
    // Đường dẫn gốc
    define('_WEB_ROOT', $web_root);

    function formatPrice($price) {
        return number_format($price,0,',','.') . 'đ' ;
    }
?>