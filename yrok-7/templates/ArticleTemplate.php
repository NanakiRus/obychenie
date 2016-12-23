<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Сама новость</title>
</head>
<body>
<article>
    <h1><?php echo $this->data['article']->returnHeader(); ?></h1>
    <?php echo $this->data['article']->returnArticle(); ?>
</article>

</body>
</html>