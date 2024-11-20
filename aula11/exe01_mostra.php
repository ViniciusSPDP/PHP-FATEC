<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h3>Recebendo os dados e mostrando com echo</h3>";
    for ($i = 0; $i <= 4; $i++) {
        $n[$i] = $_GET["v$i"]; //
        echo "$n[$i] <br/>";
    }

    echo "<h3>Mostrando com ForEach</h3>";

    foreach ($n as $key => $valor) {
        echo "$key <br/>";
    }
    ?>
</body>

</html>