<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>partie 3 exercice 2</title>
</head>
<body>
    <?php
        $nb1 = 0;
        $nb2 = 4;
        while ($nb1 < 20) {
            $nb1 = $nb1 * $nb2;
            echo '<p>' . $nb1 . '</p>';
            $nb1++;
        }
    ?>
</body>
</html>