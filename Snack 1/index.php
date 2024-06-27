<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema
Olimpia Milano - Cantù  55-60 -->
<?php
$partite = [
    [
        "squadraCasa" => "Olimpia Milano",
        "puntiCasa" => 55,
        "squadraOspite" => "Cantù",
        "puntiOspite" => 60
    ],
    [
        "squadraCasa" => "Virtus Bologna",
        "puntiCasa" => 70,
        "squadraOspite" => "Reggiana",
        "puntiOspite" => 65
    ],
    [
        "squadraCasa" => "Varese",
        "puntiCasa" => 80,
        "squadraOspite" => "Treviso",
        "puntiOspite" => 75
    ],
];

//stampa

foreach ($partite as $partita) {
    echo $partita["squadraCasa"]. "-" . $partita["squadraOspite"]. " " . $partita["puntiCasa"] . " " . $partita["puntiOspite"]. "<br>";
}


?>
