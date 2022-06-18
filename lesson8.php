<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лаба 8</title>
</head>
<body>
<h1> Задание 1: </h1>
<h2>числа 2 и 8: <?= Num_One(2, 8) ?></h2>
<h2>числа -3 и -2: <?= Num_One(-3, -2) ?></h2>
<h2>числа -2 и 8: <?= Num_One(-2, 8) ?></h2>

<h1> Задание 2 </h1>
<h2> <?= Num_Two() ?></h2>

<h1> Задание 3 </h1>
<h2>Аргументы 5 и 6</h2>
<h2> Операция сложения <?= Num_Three(5, 6, '+') ?></h2>
<h2> Операция разности <?= Num_Three(5, 6, '-') ?></h2>
<h2> Операция произведения <?= Num_Three(5, 6, '*') ?></h2>
<h2> Операция деления <?= Num_Three(5, 6, '/') ?></h2>

<h1> Задание 4 </h1>
<h2> Текущий год: <?= Num_Four() ?></h2>

<h1> Задание 5 </h1>
<h2> <?= Num_Five() ?></h2>

<h1> Задание 6 </h1>
<h2> <?= Num_Six() ?></h2>

<h1> Задание 7: </h1>
<h2> <?= Num_seven('задание семь') ?></h2>

<h1> Задание 8: </h1>
<div> <?= Num_eight() ?></div>
</body>
</html>

<?php $a = mt_rand(-99, 100);
$b = mt_rand(-99, 100);

function Num_One($a,$b){
    if($a >= 0 && $b >= 0) {
        return $a - $b;
    } else {
        if($a < 0 & $b < 0) {
            return $a * $b;
        } else {
            return $a + $b;
        }
    }
}

function Num_Two(){
    $a = mt_rand(0, 15);
    for ($i = $a; $i <= 15; $i++) {
        switch ($a) {
            case $i:
                echo $a++ . ' ';
        }
    }
}

function Num_Three($val1,$val2,$operator){
    switch($operator){
        case '+': return $val1 + $val2;
        case '-': return $val1 - $val2;
        case '*': return $val1 * $val2;
        case '/': return $val1 / $val2;

        default: return 'Операции не существует';
    }
}

function Num_Four(){
    return date('Y');
}
function Num_Five(){
    $i = 0;
    do {
        if ($i == 0) $type_int = " - ноль.";
        elseif ($i % 2 == 0) $type_int = " - четное число.";
        else $type_int = " - нечетное число.";
        echo $i . $type_int. "\n";
        $i++;
    }
    while ($i <= 10);
}

function Num_Six(){
    $arrayObl = [
        'Московская область' => ['Москва', 'Зеленоград', 'Красногорск'],
        'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск'],
        'Свердловская область' => ['Екатеринбург', 'Богданович', 'Сухой Лог',
            'Камышлов']
    ];
    foreach ($arrayObl as $obl => $city) {
        echo "<br>" . $obl . ": <br>";
        foreach ($city as $cityName) {
            echo " " . $cityName . ", ";
        }
    }
}

function Num_seven($str){
    $letters = [
        'a' => "a",
        'б' => "b",
        'в' => "v",
        'г' => "g",
        'д' => "d",
        'е' => "e",
        'ё' => "yo",
        'ж' => "zh",
        "з" => "z",
        'и' => "i",
        'й' => "y",
        'к' => "k",
        'л' => "l",
        'м' => "m",
        'н' => "n",
        'о' => "o",
        'п' => "p",
        'р' => "r",
        'с' => "s",
        'т' => "t",
        'у' => "u",
        'ф' => "f",
        'х' => "h",
        'ц' => "c",
        'ч' => "ch",
        'ш' => "sh",
        'щ' => "sch",
        'ъ' => "",
        'ы' => "y",
        'ь' => "",
        'э' => "e",
        'ю' => "yu",
        'я' => "ya",
    ];
    return strtr($str,$letters);
}

function Num_eight()
{
    $menu = [
        "Уровень 1" => ["Уровень 2", "Уровень 2" => ["Уровень 3", "Уровень 3", "Уровень 3" => ["Уровень 333"]]],
        "Уровень 2" => ["Уровень 22", "Уровень 22" => ["Уровень 33", "Уровень 33"]]
    ];
    return '<ul>' . render_eight($menu) . '</ul>';
}
function render_eight($menu)
{
    $struct = '';
    foreach($menu as $item => $value) {
        if(!is_array($value)) {
            $struct .= '<li>' . $value . '</li>';
        } else {
            $struct .= '<li>' . $item . '</li>';
            $struct .= '<ul>' . render_eight($value) . '</ul>';
        }
    }
    return $struct;
}
?>

    

