<?php 


$sezioni = [
    [
        'domanda' => ' <h1> come si fa questo <h1> ',
        'risposte' => ['si fa cosi', 'si fa cosà']
    ],
    [
        'domanda' => ' <h1> come si fa quello <h1>',
        'risposte' => ['si fa come la', 'si fa come qua']
    ],
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
            <li> 
                <div> <?php echo $sezione['domanda'] ?> </div>  
                <ol>
                    <?php foreach($sezione['risposte'] as $risposte) {?>
                        <li> <?php echo $risposte ?></li>
                    <?php }?>
                </ol>
            </li>
            
        <?php }?>
    </ul>
    
</body>
</html>

<style>

    * {
        list-style-type: none;
    }

</style>