<?php
//
//$x = 1;
//$y = 2;
//
////логика
//$x = $x ^ $y; //x = 1 + 2 = 3 //XOR
//
//
//echo "x = $x, y = $y";


$a = 5;
$b = '05';
var_dump($a == $b);  // Сравнение $a и $b. Приведение типов: '05' становится 5. Результат: true.
var_dump((int)'012345');  // Приведение строки '012345' к целому числу. Лидирующий ноль игнорируется. Результат: 12345.
var_dump((float)123.0 === (int)123.0);  // Строгое сравнение между числом с плавающей точкой 123.0 и целым числом 123.
                                              // Типы данных различны, поэтому результат: false.
var_dump(0 == 'hello, world');  // Сравнение числа 0 со строкой 'hello, world'. Строка преобразуется к числу (0), результат: true.

// если поменять версию с 8.2 на 7.4 изменится вывод в строке 15 на fslse остальное все останется такое же как и было



//Используя только две числовые переменные, поменяйте их значение местами. Например, если a = 1, b = 2,
// надо, чтобы получилось: b = 1, a = 2. Дополнительные переменные, функции и конструкции типа list()
// использовать нельзя.
$a = 1;
$b = 2;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "a = $a, b = $b";
