<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcao_sem_retorno</title>
</head>

<body>
    <?php

    function soma($a, $b)
    {
        $s = $a + $b;
        echo "A soma entre $a e $b = $s";
    }

    echo "<h3>Função sem retorno</h3>";

    $x = 20;
    $y = 30;
    $r = soma($x, $y);

    ?>

</body>

</html>