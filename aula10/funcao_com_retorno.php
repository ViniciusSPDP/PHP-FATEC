<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcao_com_retorno</title>
</head>

<body>
    <?php

    function soma($a, $b)
    {
        $s = $a + $b;
        return $s;
    }

    echo "<h3>Função com retorno</h3>";

    $x = 20;
    $y = 30;
    $r = soma($x, $y);

    echo "A soma entre $x e $y = $r";
    ?>

</body>

</html>