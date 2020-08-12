<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список категорий новостей</title>
</head>
<body>
<?include_once 'menu.php'?>
<h2>Список категорий новостей</h2>
<?foreach($category as $item):?>
<a href="<?=route('Category', $item['slug'])?>"><?=$item['title']?></a><br>
<?endforeach?>

</body>
</html>