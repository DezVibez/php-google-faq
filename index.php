<?php 


$sezioni = [
    [
        'domanda' => 'come si fa questo',
        'risposta' => 'si fa cosi'
    ],
    [
        'domanda' => 'come si fa quello',
        'risposta' => 'si fa <href>cosà<href>'
    ]
    ];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($sezioni as $sezione){?>
            <li> <?php echo $sezione['domanda'] ?> </li>
            <li> <?php echo $sezione['risposta'] ?> </li>
        <?php }?>
    </ul>
    
</body>
</html>