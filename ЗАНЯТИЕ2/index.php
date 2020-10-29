<?php
    echo "<b>ЗАНЯТИЕ 2</b>";
    echo "<hr/>";

    echo "<i>Задание 1a </i><br/><br/>";

    $arr = array ("a", "b", "c");
    var_dump ($arr);



    echo "<hr/>";
    echo "<i>Задание 1b </i><br/><br/>";

    for ($i = 0; $i < count($arr); $i++) {
        echo "Элемент массива c индексом $i = ".$arr[$i]."<br/>";
    }



    echo "<hr/>";
    echo "<i>Задание 1c </i><br/><br/>";

    $arr[] = "d";
    echo '\''.$arr[0]."+".$arr[1].", ".$arr[2]."+".$arr[3].'\'';



    echo "<hr/>";
    echo "<i>Задание 1d </i><br/><br/>";

    $arr = array (2, 5, 3, 9);
    $result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
    echo $result;



    echo "<hr/>";
    echo "<i>Задание 1e </i><br/><br/>";

    $arr = array ();
    $arr[] = 1;
    $arr[] = 2;
    $arr[] = 3;
    $arr[] = 4;
    $arr[] = 5;
    var_dump ($arr);



    echo "<hr/>";
    echo "<i>Задание 1f </i><br/><br/>";

    $arr = array ("a" => 1, "b" => 2, "c" => 3);
    echo $arr["c"];



    echo "<hr/>";
    echo "<i>Задание 1g </i><br/><br/>";

    $result = $arr["a"] + $arr["b"] + $arr["c"];
    echo $result;



    echo "<hr/>";
    echo "<i>Задание 1h </i><br/><br/>";

    $arr = array ("Коля" => "1000$", "Вася" => "2000$", "Петя" => "3000$");
    echo "Зарплата Коли ".$arr["Коля"].", А Пети ".$arr["Петя"].".";



    echo "<hr/>";
    echo "<i>Задание 1i-j </i><br/><br/>";

    $arr = array ( 1 => "понедельник", 2 => "вторник", 3 => "среда",  4 => "четверг", 5 => "пятница", 6 => "суббота", 7 => "воскресенье" );
    $day_of_week = date('N');

    foreach ($arr as $key => $value) {
        $day = $key;
        if ($key == $day_of_week)
            echo "Сегодня $value ($day)";
    }



    echo "<hr/>";
    echo "<i>Задание 1k </i><br/><br/>";

    $wordpress = 'wordpress';
    $blue = 'blue';

    $arr = array( array('joomla', 'wordpress', 'drupal'),
                  array('blue' => 'голубой', 'red' => 'красный', 'green' => 'зеленый')
                );

    for ($row = 0; $row < count($arr); $row++) {

        for ($col = 0; $col < 3; $col++) {
            if ($row == 1) break;
            else if ($arr[$row][$col] != $wordpress)
                echo $arr[$row][$col]."<br/>";
        }

        foreach($arr[$row] as $key => $value) {
            if ($row == 0) continue;
            else if ($key != $blue)
                echo $value."<br/>";
        }
    }



    echo "<hr/>";
    echo "<i>Задание 1l </i><br/><br/>";

    $arr = [
            "ru" => [ 1 => "понедельник", 2 => "вторник", 3 => "среда", 4 => "четверг", 5 => "пятница", 6 => "суббота", 7 => "воскресенье"],
            "en" => [ 1 => "monday", 2 => "tuesday", 3 => "wednesday", 4 => "thursday", 5 => "friday", 6 => "saturday", 7 => "sunday"]
    ];

            foreach ($arr as $key => $value) {
                foreach ($arr["ru"] as $key => $value) {
                    if ($key > 1) break;
                    else if ($key == 1)
                        echo $value."<br/>";
                }
                foreach ($arr["en"] as $key => $value) {
                    if ($key == 3)
                        echo $value."<br/>";
                }
                if ($arr["ru"][1] == "понедельник") break;
            }



    echo "<hr/>";
    echo "<i>Задание 1m </i><br/><br/>";

    $lang = "ru";
    $day = 3;

    foreach ($arr[$lang] as $key => $value) {
        if ($key == $day)
            echo $value."<br/>";
    }



    echo "<hr/>";
    echo "<i>Задание 1n </i><br/><br/>";


    $pass = '428456789756803550928238111111111111111111111232323236978946781312312312356765700000991822822727222211';
    $hack = '';
    $arr = str_split($pass);

    foreach ($arr as $value) {
      for ($i = 0; $i < 10 ; $i++) {
        if ($i == $value) {
          $hack .= $i;
          break;
        }
      }
    }

    if ($hack === $pass) {
      echo 'Пароль подобран верно.<br/>';
      echo 'Пароль - '.$hack;
    }



    echo "<hr/>";
    echo "<i>Задание 2a </i><br/><br/>";

    function printWords () {    // называем функцию - printWords. () - в скобках параметр, который принимает данная функция
        echo "Hello!";          // функция выведет "хеллоу" когда мы будем на нее ссылаться
    }
    printWords ();              // вызываем функцию printWords.


    echo "<br/>";


    $x = 20;
    function printInt ($int) {    // принимаемое значение параметра функции мы можем записать под другим именем. здесь $int.
        echo $int;                // функция выведет число которое она приняла в качестве параметра
    }
    printInt ($x);                // вызываем функцию. значение 20 переменной х будет параметром функции и выведется на экран


    echo "<br/>";


    function math ($first, $second) {   // функция, принимающая 2 параметра
        $sum = $first + $second;        // в переменную sum запишем сумму значений принимаемых параметров
        return $sum;                    // вернем сумму
    }

    $y = 35;                      // параметр
    $summa = math ($x, $y);       // в переменной summa лежит, то, что вернула функция math

    function printInt2 ($int) {   // через эту функцию выведем, то, что вернула функция math
        echo $int;
    }
    printInt2 ($summa);           // параметром функции printInt2 будет, то что вернула функция math. значение этого параметр и выведем на экран


    echo "<br/>";


    function printInt3 ($w, $o, $p) {      // в этой функции лежит вызов другой функции. o, p примут значения x, y
        $w = math ($o, $p);             // word будет равна тому что вернет math
        echo $w;                        // выведем значение word на экран
    }
    printInt3 ($word, $x, $y);             // вызовем



    echo "<hr/>";
    echo "<i>Задание 2b </i><br/><br/>";

    $arr = [
      'Вова' => [500, 200, 300, 400, 3000],
      'Петя' =>  [400, -100, 650, 50, 900, -300],
      'Вася' =>  [200, -200, 450, -350, 300],
      'Саша' =>  [100, 200, 450, 350, -300, 3000]
    ];

    $sums = [];

    foreach ($arr as $key => $value) {
        $sum = 0;
        for ($c = 0; $c < count($value); $c++) {
          $sum = $sum + $value[$c];
        }
        $sums[] = $sum;
    }

    rsort($sums);
    echo $sums[0].'<br/>';
    echo $sums[1].'<br/>';
    echo $sums[2].'<br/>';
    echo $sums[3].'<br/>';



    echo "<hr/>";
    echo "<i>Задание 2c </i><br/><br/>";

    $range = [1, 50];

    function numbers($range) {
        for ($i = $range[0]; $i <= $range[1]; $i++) {
            if ($i == 1) continue;
            $prime = 0;
            for ($j = 1; $j <= $i; $j++) {
                $r = $i % $j;
                if ($r == 0) {
                    $prime++;
                }
            }
            if ($prime == 2)  {
                $prime_numbers[] = $i;
            }
            else {
                $composite_numbers[] = $i;
            }
        }

        echo 'Простые числа: ';
        foreach ($prime_numbers as $value) {
            echo $value.' ';
        }

        echo '<br/>Составные числа: ';
        foreach ($composite_numbers as $value) {
            echo $value.' ';
        }


    }

    numbers($range);

?>
