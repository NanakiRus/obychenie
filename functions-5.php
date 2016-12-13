<?php

function goroda ($all, $char) {
    foreach ($all as $str) {
        if (mb_substr ($str, 0, 1) === $char) {
            return $result = $str;
        } 
    }
}

assert('Мышкин' == goroda(['Мышкин', 'Москва', 'Коломна'], 'М'));
assert('Абаза' == goroda(['Абаза', 'Клин', 'Серпухов'], 'А'));

function alrady ($already, $town) {
    $post = $_POST['text'];
    $post = mb_convert_case($post, MB_CASE_TITLE);
    $town = mb_convert_case($town, MB_CASE_TITLE);
        /*foreach ($already as $str) {
             if ($post == mb_convert_case($str, MB_CASE_TITLE) || $town == mb_convert_case($str, MB_CASE_TITLE)) {
                 return FALSE;
             }
        }*/
    if (in_array($post, $already) || in_array($town, $already)) {
        return FALSE;
    }
        
    $put = $post . "\r\n";
    file_put_contents(__DIR__ . '/alrady.txt', $put, FILE_APPEND);
    
    if (isset($town)) {
        $put = $town . "\r\n"; 
        file_put_contents(__DIR__ . '/alrady.txt', $put, FILE_APPEND);
    }
    return TRUE;
}
