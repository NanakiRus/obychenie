<!DOCTYPE html>
<html dir="ltr" lang="ru">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Урок - 5</title>
</head>
<body style=" width: 600px; margin: 0 auto;">
    <h1>Задание - 1</h1>
<?php

require __DIR__ . '/functions-5.php';

$towns = file (__DIR__ . '/goroda.txt', FILE_IGNORE_NEW_LINES);
$already = file (__DIR__ . '/alrady.txt', FILE_IGNORE_NEW_LINES);
$all = array_diff($towns, $already);
$char = 'А';

echo goroda ($all, $char);
?>

    <h2>Задание - 2</h2>
    <h2>Игра в города России</h2>
    <p>Введите название города</p>
    <form method="post" action="/obychenie/yrok-5.php">
        <input type="text" name="text">
        <input type="submit">
    </form>
<?php

if (isset ($_POST['text'])) {
    $post = mb_convert_case($_POST['text'], MB_CASE_TITLE);
    if (in_array($post, $towns)) {
    if (mb_substr ($post, -1) == 'ь' || mb_substr ($post, -1) == 'ъ' || mb_substr ($post, -1) == 'ы') {
        $text = mb_substr ($post, -2, 1);
        $text = mb_strtoupper ($text);
        $town = goroda ($all, $text);
    } else {
        $text = mb_substr ($post, -1);
        $text = mb_strtoupper ($text);
        $town = goroda ($all, $text);
    }
    if (FALSE == alrady ($already, $town)) {
        $msg = 'Такой город уже был!';
        $allert = 'Ошибка!';
    } else {
        $msg = 'Играем дальше!';
    }
    } else {
    $allert = 'Это не город России!';
    }
} else {
    $text = 'букву X';
    $town = 'Название города';
}
?>
    <p>Город заканчивающийся на <?php if (isset($allert)) { echo $allert; } else { echo $text . ' - ' . $town; } ?></p>
    <b><?php if (isset($msg)) { echo $msg; } ?></b>
</body>
</html>