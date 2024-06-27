
<?php

$alunn2 = include __DIR__ ."/alunni.php";

foreach ($alunni as $alunno) {
    echo "Nome: " . $alunno["Nome"] . "<br>";
    echo "Cognome: " . $alunno["Cognome"] . "<br>";
    echo "Voti: " . implode(", ", $alunno["Voti"]) . "<br><br>";
}
?>
