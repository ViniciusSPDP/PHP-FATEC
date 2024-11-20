<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcao_multiplos</title>
</head>
<body>
    <?php
    function soma(){

        $v = func_get_args();

        $t = func_num_args();
        $s = 0;
        for($i = 0; $i < $t; $i++){
            $s = $s + $v[$i];
        }
        return $s;
    }

    echo "<h3>Soma da função com múltiplos parâmetros</h3>";
    $r = soma(3, 5, 2, 8, 9, 4);
    echo "A soma = $r";
    ?>
    
</body>
</html>