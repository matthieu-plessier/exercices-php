<?php
$int= (int)null;
$int= 2;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        echo $int;
        echo $int;
        settype($int , 'string');
        var_dump($int);
    ?>

    
</body>
</html>