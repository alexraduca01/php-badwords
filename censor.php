<?php 

$param = $_GET['text'];
$name = $_GET['nome'];

$censoredParam = str_replace('lorem','***', $param);
$censoredName = str_replace('alex','****', $name);
$paramLenght = strlen($param);
$nameLenght = strlen($name);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>

    <body>
        <p> <?php echo $param . ' ' . $name ?></p>
        <p> <?php echo $censoredParam . ' ' . ' Words:' . ' ' . $paramLenght ?> </p>
        <p> <?php echo $censoredName . ' ' . ' Words:' . ' ' . $nameLenght ?> </p>
    </body>

</html>