<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
</head>
<body>
    <?php
    $num = 23.8;
    if(is_string($num)){
        echo "Numero inteiro";
    }
    else {
        echo" o valor da variável não é um número inteiro!";
    }
    ?>
</body>
</html>