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
    $post = mb_convert_case($_POST['text'], MB_CASE_TITLE);
    $town = mb_convert_case($town, MB_CASE_TITLE);
    if (in_array($post, $already) || in_array($town, $already)) {
        return FALSE;
    }
        
    $put = $post . "\r\n";
    file_put_contents(__DIR__ . '/alrady.txt', $put, FILE_APPEND);
    
    if (isset($town) || $town !='') {
        $put = $town . "\r\n"; 
        file_put_contents(__DIR__ . '/alrady.txt', $put, FILE_APPEND);
    }
    return TRUE;
}
