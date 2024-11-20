<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $n1 = $_GET["n1"];

    if (!$n1 == null) {
        echo "<h3>Analisando o número $n1</h3><br>";
        echo "Valores Multiplos<br>";
        $mult = 0;
        for ($i = 1; $i <= $n1; $i++) {
            if($n1 % $i ==0){
                $mult++;
                echo "$i <br>";
            }
        }
        echo "<br>Total de Multiplos: $mult<br>";
        if($mult == 2){
            echo "O resultado $n1 é Primo";
        }else{
            echo "O resultado $n1 não é Primo";
        }
    } else {
        echo "<h3>Informe um numero</h3>";
    }
    ?>
    <br><br>
    <a href="primo.html">Voltar</a>

</body>

</html>