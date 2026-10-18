<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 8</title></head>
<body>

<h2>Partie 1</h2>
<p>
<?php
$n = 0;
while ($n <= 20) {
    if ($n == 10) {
        echo "<b>$n</b> ";
    } else {
        echo "$n ";
    }
    $n += 2;
}
?>
</p>

<h2>Partie 2</h2>
<p>
<?php
$compteur = 5;
$executions = 0;
while ($compteur < 5) {
    $executions++;
    $compteur++;
}
echo "while : $executions exécution(s)<br>";

$compteur = 5;
$executions = 0;
do {
    $executions++;
    $compteur++;
} while ($compteur < 5);
echo "do-while : $executions exécution(s)";
?>
</p>

<h2>Partie 3</h2>
<p>
<?php
for ($i = 1; $i <= 20; $i++) {
    if ($i >= 16) {
        break;
    }
    if ($i % 3 == 0) {
        continue;
    }
    echo "$i ";
}
?>
</p>

</body>
</html>