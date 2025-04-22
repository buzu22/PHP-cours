<?php

//Ex1
$var1 = 21;
$var2 = "bababa";
$var3 = true;

echo gettype($var1), PHP_EOL;
echo gettype($var2), PHP_EOL;
echo gettype($var3), PHP_EOL;

// Ex 2
$a = "10";
$b = 5;
$c = $a + $b;
echo $c, PHP_EOL; 
var_dump($c); // il choisit de mettre le résultat en int

// Ex 3
$d = "123";
settype($d, "integer");
var_dump($d);

$e = 7.8;
settype($e, "string");
var_dump($e);

// Ex 4
$value = 0;
echo is_int($value), PHP_EOL; //repond 1
echo empty($value), PHP_EOL; // répond 1

$value4 = null;
echo is_int($value4), PHP_EOL; //repond 0
echo empty($value4), PHP_EOL; // répond 1

$value4 = "";
echo is_int($value4), PHP_EOL; //repond 0
echo empty($value4), PHP_EOL; // répond 1

$value4 = false;
echo is_int($value4), PHP_EOL; //repond 0
echo empty($value4), PHP_EOL; // répond 1

$value4 = [];
echo is_int($value4), PHP_EOL; //repond 0
echo empty($value4), PHP_EOL; // répond 1

// Ex5
$age = "35";
var_dump($age); //string(2) "35"
settype($age, "integer");
var_dump($age); //int(35)

//Ex 6
var_dump("0" == false); // répond true car 0 est égal à false
var_dump("0" === false); // répond false car 0 n'est pas du même type que false (number != bool)

// Ex 7
$tableau = [3, 4.55, true, "bonbon", null];
foreach ($tableau as $t) {
    echo $t, PHP_EOL;
    var_dump($t);
}



