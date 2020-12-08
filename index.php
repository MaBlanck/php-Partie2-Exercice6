<?php
$gender = 40;
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

    <p><?php
    if($gender >= 18)
    {
        echo 'Tu es majeur';
    }
    else 
    {
        echo 'Tu n\'es pas majeur';
    }
    ?></p>
</body>
</html>