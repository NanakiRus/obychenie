<?php

require __DIR__ . '/class/View.php';
require __DIR__ . '/class/Article.php';
require __DIR__ . '/class/News.php';

$view = new View;

$news = new News(__DIR__ . '/data/news.txt');

if (isset($_GET['id'])) {
    $newsObj = $news->getDataById($_GET['id']);

    if ($newsObj instanceof Article) {
        $view->assign('article', $newsObj);
        $view->display(__DIR__ . '/templates/ArticleTemplate.php');
    } else {
        header("HTTP/1.0 404 Not Found");
        die();
    }
}