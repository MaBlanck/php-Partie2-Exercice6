<?php
$gender = 17;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 6 Partie 2</title>
</head>

<body>
    <h1>Exercice 6 partie 2</h1>
    <?php if ($gender >= 18) : ?>
        <?= 'Tu es majeur'; ?>
    <?php else : ?>
        <p><?= 'Tu n\'es pas majeur'; ?></p>
    <?php endif ?>
</p>
</body>
</html>