<?php

//Ex 1
$age = 17;
if ($age >= 18){
    echo "Vous êtes majeur", PHP_EOL;
}else {
    echo "Vous êtes mineur", PHP_EOL;
};

//Ex 2
$nombre = 25;
if($nombre%2 === 1){
    echo "nombre impair", PHP_EOL;
}else {
    echo "nombre pair", PHP_EOL;
};


//Ex 3
$nombre = 0;
if ($nombre < 0){
    echo "Le nombre est nég", PHP_EOL;
}elseif ($nombre > 0) {
    echo "Le nombre est positif", PHP_EOL;
}else{
    echo "Le nombre est nul", PHP_EOL;
};

//Ex 4
$age = 17;
if ($age < 18 or $age > 65){
    echo "L'age n'est pas entre 18 et 65 ans", PHP_EOL;
}else {
    echo "l'age est entre 18 et 65 ans", PHP_EOL;
};

//Ex 5
$password = "1234";
if ($password === "1234"){
    echo "le mdp est correct", PHP_EOL;
}else {
    echo "le mdp est incorrect", PHP_EOL;
};

//Ex 6
$nombre = 15;
if ($nombre%3 === 0 and $nombre%5 === 0){
    echo "le nombre est divisible par 3 et 5", PHP_EOL;
}else {
    echo "le nombre n'est pas divisible par 3 et 5", PHP_EOL;
};
?>
//Ex 7
<?php
$temperature = 30;
?>
<?php if ($temperature > 30): ?>
    t° chaude
<?php elseif ($temperature >= 15 and $temperature <= 30): ?>
    t° modérée
<?php else: ?>
    t° froide
<?php endif; ?>

//Ex 8
<!-- <h1>Vérification de nombre entier</h1>
    
    <form method="POST" action="">
        <label for="nombre">Veuillez saisir un nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Vérifier</button>
    </form>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer la valeur saisie
        $nombre = $_POST["nombre"];
        
        // Vérifier si c'est un nombre entier
        if (filter_var($nombre, FILTER_VALIDATE_INT) !== false) {
            echo "<p>Bravo ! $nombre est bien un nombre entier.</p>";
        } else {
            echo "<p>Erreur : La valeur saisie n'est pas un nombre entier.</p>";
        }
    }
    ?> -->

    //Ex 9
    <?php
    $personne = [
        'nom' => '',
        'age' => '',
        'ville' => '',
    ];

    if (array_key_exists('ville', $personne)){
        echo "la clé ville existe";
    }else {
        echo "la clé ville n'existe pas";
    };


