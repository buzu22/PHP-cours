<?php

// Ex 1
$a = 8;
$b = 4;
$operation = '*';

if ($operation === "addition"){
    echo $a + $b;
}elseif ($operation === "soustraction"){
    echo $a - $b;
}
elseif ($operation === "multiplication"){
    echo $a * $b;
}
elseif ($operation === "division"){
    echo $a / $b;
}
else{
    echo "Veuillez entrer une opération", PHP_EOL;
}

// Ex2
$result = 5 + 3 * 2;
echo $result, PHP_EOL; //fait d'abord la musiplication

// Ex3
$x = 10;
var_dump($x > 5);
var_dump($x < 5);
var_dump($x == 10);
var_dump($x != 8);
var_dump($x >= 10);
var_dump($x <= 9);

// Ex 4
$isAdmin = true;
$isLoggedIn = false;

var_dump($isAdmin && $isLoggedIn); //false
var_dump($isAdmin || $isLoggedIn); //true
var_dump($isAdmin xor $isLoggedIn); //true

// Ex 5
$score = 15;
$resultat = $score >= 10 ? 'Réussi' : 'Echoué';
echo $resultat, PHP_EOL;

// Ex 6
$n = 4;

$n +=3;
echo $n, PHP_EOL; //7

$n *=2;
echo $n, PHP_EOL; //14

$n -=1;
echo $n, PHP_EOL; //13

$n %=5;
echo $n, PHP_EOL; //3

// Ex 7
$prenom = "Alice";
$nom = "Durand";
echo "$prenom $nom", PHP_EOL;

// Ex8
$handle = fopen(@"fichier-inexistant.txt", "r");
if ($handle === ){
    echo "fichier ouvert";
}else {
    echo "fichier n'a pas pu être ouvert";
};