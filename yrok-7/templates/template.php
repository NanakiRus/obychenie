<!DOCTYPE html>
<html dir="ltr" lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Урок - 7</title>
</head>
<body style=" width: 600px; margin: 0 auto;">
<h1>Задание - 1</h1>

<?php
foreach ($this->data['record'] as $text) {
    ?>
    <p>
        <?php
        echo $text->getText();
        ?>
    </p>
    <?php
}
?>

<form method="post" action="">
    <input type="text" name="text">
    <input type="submit">
</form>

<h2>Задание - 2</h2>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <input type="submit">
</form>

<h3>Задание - 3</h3>
<a href="/obychenie/yrok-7/news.php">Список новостей</a>

</body>
</html>