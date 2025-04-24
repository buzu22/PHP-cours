<?php

//Ex 1
for ($i = 1; $i <= 10; $i++){
    echo $i, PHP_EOL;
};

//Ex 2
$somme = 0;
$i = 1;
while ($i <= 10){
    $somme = $somme + $i;
    $i++;
    echo $somme, PHP_EOL;
};

//Ex 3
$i = 1;
do {
    print "itération $i". PHP_EOL;
    $i++;
} while ($i <= 5);

//Ex 4
$fruits = ["pomme", "banane", "orange", "kiwi"];
foreach ($fruits as $fruit){
    echo $fruit, PHP_EOL;
};

//Ex 5
$personne = [
    'nom' => 'yoann',
    'age' => '26'
];
foreach ($personne as $cle => $valeur){
    echo"clé: $cle, valeur; $valeur". PHP_EOL;
};

//Ex 6
for ($i = 1; $i <= 10; $i++){
    if ($i === 5){
        continue;
    }
    
    echo "$i", PHP_EOL;
};

//Ex7
$nombres = [1, 2, 3, 4, 5, 6];
foreach ($nombres as $nombre){
    if($nombre%2 === 0){
        echo "nombres pairs: $nombre", PHP_EOL;
    }
};

//Ex8
for ($i = 10; $i > 0; $i--){
    echo "n : $i", PHP_EOL;
};

//Ex9


//Ex10

