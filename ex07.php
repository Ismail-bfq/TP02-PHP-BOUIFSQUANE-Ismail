<?php
$nombre = 7;
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 7</title></head>
<body>

<section>
    <h2>Table de multiplication de <?= $nombre ?></h2>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "$nombre × $i = " . ($nombre * $i) . "<br>";
    }
    ?>
</section>

<section>
    <h2>Pyramide</h2>
    <pre><?php
    for ($ligne = 1; $ligne <= 6; $ligne++) {
        for ($j = 1; $j <= $ligne; $j++) {
            echo "*";
        }
        echo "\n";
    }
    ?></pre>
</section>

</body>
</html>