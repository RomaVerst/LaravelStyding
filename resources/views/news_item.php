<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$news['title']?></title>
</head>
<body>
<?include_once 'menu.php'?>
<?if(isset($news)):?>
<h2><?=$news['title']?></h2>
<p><?=$news['text']?></p>
<?else:?>
<i>Такой новости нет</i>
<?endif?>
</body>
</html>