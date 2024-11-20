<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While</title>
</head>
<body>
    <?php 
    echo "<h3>Contagem de 1 a 10</h3>";
    $contador =1;

    do{
        echo $contador . "<br>";
        $contador++;
    }while($contador <=10);
    ?>
</body>
</html>