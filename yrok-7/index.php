<?php

require __DIR__ . '/class/GuestBook.php';
require __DIR__ . '/class/Record.php';
require __DIR__ . '/class/GuestBookRecords.php';
require __DIR__ . '/class/View.php';

$guestBook = new Record(__DIR__ . '/data/text.txt');

if (isset($_POST['text']) && $_POST['text'] != '') {
    $guestBook->append(new GuestBookRecords($_POST['text']));
    $guestBook->save();
}

$view = new View;
$view->assign('record', $guestBook->getData());
$view->display(__DIR__ . '/templates/template.php');

require __DIR__ . '/class/Uploader.php';

$field = 'img';

$uploader = new Uploader($field);
$path = __DIR__ . '/upload/';
$uploader->upload($path);
?>