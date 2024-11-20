<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Mostra</title>
</head>

<body>
    <?php
    $n = $_GET["n"];
    $i = 1;
    echo "Tabuada do número $n<br><br>";
    do{
        echo "$n * $i = " . $n*$i . "<br>";
        $i++;
    }while($i<=10)
    ?>
    <br><br>
    <a href="tabuada.php">Voltar</a>

</body>

</html>