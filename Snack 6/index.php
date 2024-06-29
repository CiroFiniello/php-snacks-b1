<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
-->


<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
            ];
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
    <section class="bg-grey">
        <ul>
            <?php foreach ($db['teachers'] as $teacher) {?>
                <li>
                    <?php echo $teacher['name'] . "" . $teacher["lastname"]; ?>
                </li>
            <?php } ?>
        </ul>
    </section>
    <section class="bg-green">
        <ul>
            <?php foreach ($db['pm'] as $pm) {?>
                            <li>
                                <?php echo $pm['name'] . "" . $teacher['lastname']; ?>
                            </li>
                    <?php } ?>
        </ul>
    </section>
</body>
</html>