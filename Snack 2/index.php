<!-- Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="get">    
    <input type="text" name="name" id="name" placeholder="name">
    <input type="text" name="age" id="age" placeholder="age">
    <input type="email" name="email" id="email" placeholder="email">
    <button type="submit">Invia</button>
</form>  
</body>
</html>
