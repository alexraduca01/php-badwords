<?php 

$param = $_GET['text'];
$name = $_GET['nome'];

$censored = str_replace($name,'***', $param);
$lenght = strlen($param);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>

    <body>
        <p> <?php echo $param ?></p>
        <p> <?php echo $censored . ' ' . ' Words:' . ' ' . $lenght ?> </p>
    </body>

</html>