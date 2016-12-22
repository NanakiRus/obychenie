<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список новостей</title>
</head>
<body>
<ul>
    <?php foreach ($this->data['article'] as $key => $text) :    ?>
        <li>
            <h2><a href="article.php?id=<?php echo $key; ?>"><?php echo $text->returnHeader(); ?></a></h2>
            <?php echo $text->returnPreview(); ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>