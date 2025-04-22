<?php
//  Ex 1
$name = 'yoann';
echo $name, PHP_EOL;

// Ex 2
$firstName = 'yoann';
$lastName = 'le buzulier';
echo "Bonjour, je m'appelle $firstName $lastName", PHP_EOL;

//Ex 3
$a = 5;
$b = 3;

echo $a + $b, PHP_EOL;
echo $a - $b, PHP_EOL;
echo $a * $b, PHP_EOL;
echo $a ** $b, PHP_EOL;

// Ex 4
$isLoggedIn = false;
echo "Utilisateur connecté : $isLoggedIn"; //ne met rien
$isLoggedIn = true;
echo "Utilisateur connecté : $isLoggedIn", PHP_EOL; //met 1

// Ex 5
// $variable1 = "test";   --> ne pas commencer variable par un nombre (corrigé)

// $mavariable = "exemple";  --> pas mettre de - dans les noms de variables

$class = "PHP";
echo $class, PHP_EOL;

// Ex 6
$temperature = 30;
var_dump($temperature); //int
$temperature = "wesh";
var_dump($temperature); //string

?>


