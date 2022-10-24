<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>time zone</title>
</head>
<body>
<h1>Кнопка,показывающая дату</h1>

<?php setlocale(LC_ALL, 'ru_RU', 'ru_RU.UTF-8', 'ru', 'russian');
date_default_timezone_set('Europe/Moscow');
mb_language('ru');
echo strftime("%d %B %G");
?>
<br>
<br>

<?php
$months = array( 1 => 'Января' , 'Февраля' , 'Марта' , 'Апреля' , 'Мая' , 'Июня' , 'Июля' , 'Августа' , 'Сентября' , 'Октября' , 'Ноября' , 'Декабря' );
echo date( 'd ' . $months[date( 'n' )] . ' Y' );
?>

<script >
    btn=document.createElement('BUTTON')
    btn.id='btn1';
    btn.onclick=function (){
        <?php setlocale(LC_ALL, 'ru_RU', 'ru_RU.UTF-8', 'ru', 'russian');
        date_default_timezone_set('Europe/Moscow');
        mb_language('ru');
        echo strftime("%d %B %G");
        ?>}
    btn.textContent ='Показать время';
    document.body.appendChild(btn);
</script>
</body>
</html>
