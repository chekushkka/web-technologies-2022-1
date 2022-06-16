<!DOCTYPE html>
<html lang="en">
<?php
date_default_timezone_set('Asia/Yekaterinburg');

$title='главный заголовок';
$h1 ='тег h1';
$year=date('Y');
$result=dateOutput();

function dateOutput(){
    $hour=date('H');
    $min=date('i');

    if ($hour == 1 || $hour == 21) {
        $hoursStr = ' час';
    } elseif (($hour >= 2 && $hour <= 4) || ($hour >= 22 && $hour <= 24)) {
        $hoursStr = ' часа';
    } else {
        $hoursStr = ' часов';
    }

    if (($min<20) || ($min>10)) {
        $minStr = ' минут';
    } elseif (($min % 10) === 1) {
        $minStr = ' минута';
    } elseif ((($min % 10)>=2) && (($min % 10)<=4)) {
        $minStr = ' минуты';
    } else {
        $minStr = ' минут';
    }

    return $hour . $hoursStr . ' ' . $min . $minStr;
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
<h1><?= $h1 ?></h1>
<h1>Текущий год: <?= $year ?></h1>
<h1>Текущее время: <?= $result ?></h1>
</body>
</html>


