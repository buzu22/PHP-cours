<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenue</h1>
    <?php echo 'salut' ?>
    <!-- OU  -->
    <?= 'salut' ?>

    



<?php

    $var = 'salut';
    $var = 56;
    $myVar = 33;

    echo "<p>$var</p>" .PHP_EOL;
// Ne fonctionne pas avec '', il faut ""
    echo '<p>$var</p>' , PHP_EOL;
    
    print_r([12, 7]);
    // Plus haut niveau de détail
    var_dump([12, 7]);

    // TYPES SCALAIRES

    echo gettype(true);

    // TYPES COMOSES
    $friends = ['coco', 'jaco'];
    echo gettype($friends), PHP_EOL;
    print_r($friends);

    // TYPES SPECIAUX

    $user = null;
    echo gettype($user), PHP_EOL;

    // VERIFICATION
    // is_xxx()

    print is_int(78); //true --> 1
    print is_scalar("78");


    // Oerateurs arithmétiques
    // + - * / % **


    // Comparaison

    var_dump(5 == '5'); // true
    var_dump(5 === '5'); // false
    var_dump(5 != '5'); // false
    var_dump(5 <> '5'); // false (même chose qu'avant)

    var_dump(5 <=> 5); // 0
    var_dump(3 <=> 5); // -1
    var_dump(8 <=> 5); // 1

    //Opérateurs logiques
    // && || and or ! xor
    // xor => soit l'un soit l'autre (ou exclusif)

    var_dump(true || true); //true
    var_dump(true or true); //true
    var_dump(true xor true); //false

    //Opérateur d'exécution
    $output = `pwd`;  //script shell
    echo $output, PHP_EOL;

    //Contrôle d'erreur
    echo @$none; //pas d'erreur même si $none n'existe pas

    //Opérateur peut être unaire, binaire ou ternaire
    //unaire -> agit sur une opérande
    $a = -1;
    $a++;

    //biaire -> agit sur deux opérandes
    $b = 2 + 4;

    //ternaire -> agit sur trois opérandes
    $c = 'coco' ? 'ok' : 'pas ok';

    //Précédence (Priorité) des opérateurs
    // && avant || 

    // Associativité (ordre quand il y a la même priorité)
    // * avant + sauf si entre ()

    //CONDITIONS
$mood = "content";
    //if, elseif, else
    if ($mood === "content"){
        echo "tu es $mood", PHP_EOL;
    }elseif ($mood === "triste"){
        echo "Dommage", PHP_EOL;

    }else {
        echo "quel est ton humeur ?", PHP_EOL;
    }  
?>

<?php if ($mood === "content"): ?>
    <p>Tu es <?= $mood ?></p>
<?php elseif ($mood === "triste"): ?>
    <p>Quel dommage!</p>
<?php else: ?>
    <p>Quel est ton humeur ?<?= $mood ?></p>
<?php endif; ?>
    

<?php
//switch

switch ($mood) {
    case 'content' :
        echo 'toi content !', PHP_EOL;
        break;
    case 'triste' :
    case 'mausade' :
        echo 'Dommage !', PHP_EOL;
        break;
    default :
        echo 'Ton humeur ??', PHP_EOL;
}

//match --> cas stricts
$userChoice = "salade";
$menu = match ($userChoice){
    "plat principal" => "raviolis",
    "entrée", "salade" => "riz/thon/tomates",
    default => "plat non servi",
};
echo $menu, PHP_EOL;

//match --> cas complexes
$age = 56;
$accessAllowed = match (true){
    $age >= 18 => true,
    default => false
};
echo $accessAllowed ? "Accès autorisé" : "Accès interdit", PHP_EOL;


$userName;
$userConnected = $userName ?? 'anonyme';
// ou
$userConnected = isset($userName) ? $userName : 'anonyme';
//manque du cours


// BOUCLES

// While, Do while
$i = 0;
while ($i <= 10) {
    echo "Le compteur vaut : ", $i++, PHP_EOL;
}

do {
    print "Itération $i" . PHP_EOL;
    $i++;
} while ($i <= 15);

//For
for ($i =0; $i <= 10; $i++){
    echo "Le compteur vaut : ", $i++, PHP_EOL;
}

//Foreach
foreach (str_split("salut") as $char) {
    echo $char, PHP_EOL;
}
?>

    </body>
</html>