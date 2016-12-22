<?php

require __DIR__ . '/class/View.php';
require __DIR__ . '/class/Article.php';
require __DIR__ . '/class/News.php';


$view = new View;

$news = new News(__DIR__ . '/data/news.txt');

$view->assign('article', $news->getData());
$view->display(__DIR__ . '/templates/NewsTemplate.php');