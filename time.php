<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>time zone</title>
</head>
<body>
<h1>Кнопка,показывающая дату</h1>

<br>
<br>

<?php
// $months = array( 1 => 'Января' , 'Февраля' , 'Марта' , 'Апреля' , 'Мая' , 'Июня' , 'Июля' , 'Августа' , 'Сентября' , 'Октября' , 'Ноября' , 'Декабря' );
//  echo date( 'd ' . $months[date( 'n' )] . ' Y' );
?>


<?php
$months = array(1 => 'Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря');
$timeUnix =date('d ' . $months[date('n')] . ' Y');

    function timeHandler($timeUnix) : string
    {
        return $timeUnix;
    }
echo timeHandler($timeUnix);


?>

</body>
</html>
