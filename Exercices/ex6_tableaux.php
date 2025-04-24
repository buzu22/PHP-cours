<?php

//Ex1
$couleurs =["rouge", "bleu", "vert"];
//Afficher chaque couleur
foreach ($couleurs as $c){
    print_r($c. PHP_EOL);
};

//Ex2
$personne = [
    'nom' => 'yoann',
    'age' => '26'
];
print_r($personne);

//Ex3
$fruits =["pomme", "banane"];
//ajouter un élément au tableau
array_push($fruits, "fraise");
print_r($fruits) ;

//Ex4
$animaux = ["chien", "chat", "lapin"];
//suppression du premier élément du tableau
unset($animaux[1]);
print_r($animaux);

//Ex5
$nombres = [6, 2, 9, 1, 7];
// trier 
sort($nombres);
print_r($nombres);

//Ex6
$fruits =["pomme", "banane"];
// compter
var_dump(count($fruits));

//Ex7
$sports = ["football","basketball", "tennis"];
if (in_array("basketball",$sports )){
    echo "basketball est bien dans le tableau", PHP_EOL;
}else {
    echo"basket n'est pas dans le tableau";
};

//Ex8
$tableau1 = ["a", "b"];
$tableau2 = ["c", "d"];
// mélanger des tableaux
var_dump(array_merge($tableau1, $tableau2));

//Ex9
$capitales = ["France" => "Paris", "Espagne" => "Madrid"];
// selectionner les clés
var_dump(array_keys($capitales));

//Ex10
$nombres = [1, 2, 3, 4, 5, 6];
$nombresPairs = array_filter($nombres, function($nombres){
    return $nombres%2 === 0;
});

print_r($nombresPairs);

//Ex11
$fruits = ["banane", "orange"];
// Ajouter au début du tableau
array_unshift($fruits, "ananas");
print_r($fruits);

//Ex12
$personne1 = ['nom' => 'yoann', 'age' => '26'];
$personne2 = ['nom' => 'coco', 'age' => '25'];
// array_merge_recursive() pour pas écraser les clés identiques
print_r(array_merge_recursive($personne1, $personne2));

//Ex13
$pays = ["France", "Espagne", "Italie"];
// trouver la position d'une valeur
$key = array_search( "Espagne", $pays);
echo $key;

//Ex14
$utilisateur = ['nom' => 'yoann', 'age' => 26, 'email' => 'lebu.yoyo@gmail.com'];
// Pour modifier une valeur 
$utilisateur['age'] = 100;
// Pour ajouter une clé => même chose 
$utilisateur['ville'] = 'montpellier';
$utilisateur['adresse'] = '';
print_r($utilisateur);

//Ex15
$lettres = ["a", "b", "c"];
//Mélanger le tableau
shuffle($lettres);
print_r($lettres);