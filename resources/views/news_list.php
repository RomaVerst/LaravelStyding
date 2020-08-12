<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список новостей</title>
</head>
<body>
<?include_once 'menu.php'?>

<h2>Список новостей</h2>

<?foreach($news as $item):?>
<a href="<?=route('NewsOne', $item['id'])?>"><?=$item['title']?></a><br>
<?endforeach?>

</body>
</html>