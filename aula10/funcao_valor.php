<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcao_valor</title>
</head>
<body>
    <?php
    function valor ($x){
        $x = $x + 2;
        echo "<p>O valor de x = $x</p>";
    }

    echo "<h3>Função que retorna parâmetro por valor</h3>";
    $a = 3;
    valor($a);
    echo "<p>O valor de a = $a</p>"
    ?>
</body>
</html>