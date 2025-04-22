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
    
?>
    
    </body>
</html>