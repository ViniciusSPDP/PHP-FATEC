<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcao_ref</title>
</head>
<body>
    <?php
    function referencia(&$x){
        $x = $x + 2;
        echo "<p>O valor de x = $x</p>";
    }

    echo "<h3>Função que retorna parâmetro por referência</h3>";
    $a = 3;
    referencia($a);
    echo "<p>O valor de a = $a</p>";
    ?>
</body>
</html>