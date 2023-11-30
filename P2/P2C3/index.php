<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'author' => 'mickael.andrieu@exemple.com',
    ],
    [
        'title' => 'Couscous',
        'author' => 'mickael.andrieu@exemple.com',
    ],
    [
        'title' => 'Escalope milanaise',
        'author' => 'mathieu.nebra@exemple.com',
    ],
    [
        'title' => 'Salade Romaine',
        'author' => 'laurene.castor@exemple.com',
    ],
];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des recettes</title>
</head>
<body>
    <ul>
        <?php for ($lines = 0; $lines <= 3; $lines++) : ?>
            <li><?php echo $recipes[$lines]['title'] . ' (' . $recipes[$lines]['author'] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>
