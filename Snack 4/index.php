<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php 
$randomNumbers = [];

while (count($randomNumbers) < 15){
    $NumberRand = rand(1,100);

    if( !in_array($NumberRand, $randomNumbers) ){
        // array_push($randomNumbers, $NumberRand);
        $randomNumbers[] = $NumberRand;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <ul>
            <?php foreach ($randomNumbers as $Number) {?>
                <li>
                    <?php echo $Number; ?>
                </li>
            <?php } ?>
    </ul>
</body>
</html>