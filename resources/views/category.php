<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости - <?=$category['title']?></title>
</head>
<body>
<?include_once 'menu.php'?>
<?if(!empty($news)):?>
<?foreach($news as $item):?>
<a href="<?=route('NewsOne', $item['id'])?>"><?=$item['title']?></a><br>
<?endforeach?>
<?else:?>
<p>Таких новостей в данной категории пока нет</p>
<?endif?>

</body>
</html>