<?php
  $todos = [
    ["id" => "fvsdfsdfzf", "name" =>  "apprendre le html", "done" => true],
    ["id" => "fvsggsdfzf", "name" =>  "apprendre le javascript", "done" => false],
    ["id" => "fvsdffffffzf", "name" =>  "apprendre le php", "done" => false],
    ["id" => "fvsdujujfzf", "name" =>  "coder, coder, coder, coder", "done" => true],
  ];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include_once __DIR__ . '/includes/head.php'; ?>
  <title>ToraTaTache</title>
</head>
<body>
  <div class="container">
    <?php include_once __DIR__ . '/includes/header.php'; ?>

    <div class="content">
      <div class="todo-container">
        <?php 
          // Inclusion de fichier
          // once si il le faut qu'à un seul endroit
          // __DIR__ pour bonne pratique et donne le chemin absolu
          // include_once __DIR__ . '/includes/test.php';
          
          // Obligé de trouver ce fichier
          // require __DIR__ . '/test.php';
        ?>
        <h1>Mes tâches</h1>

        <ul class="todo-list">
        <?php foreach($todos as $todo): ?>
          <li class="todo-item <?php echo ($todo['done']? 'low-opacity' : ''); ?>">
            <span class="todo-name"><?= $todo['name'] ?></span>

          <?php if($todo['done']): ?>
            <button class="btn btn-primary btn-small">Annuler</button>
          <?php else : ?>
            <button class="btn btn-primary btn-small">Valider</button>
          <?php endif; ?>


            <button class="btn btn-danger btn-small">Supprimer</button>
          </li>
        <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <footer>
      <?php include_once __DIR__ . '/includes/footer.php'; ?>
    </footer>
  </div>
</body>
</html>