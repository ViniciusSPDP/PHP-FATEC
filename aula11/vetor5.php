<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor 5</title>
</head>
<body>
    <pre>
        <?php
        $numeros[0][0] = 5;
        $numeros[0][1] = 30;
        $numeros[0][2] = 45;
        $numeros[1][0] = 100;
        $numeros[1][1] = 200;
        $numeros[1][2] = 300;

        echo "<h3>Mostrando com print_r</h3>";
        print_r($numeros);

        echo "<h3>Percorreno um array com foreach mostrando suas chave</h3>";
        foreach($numeros as $chaveA => $linha){
            echo "---> Linha: $chaveA <br/>";
            foreach($linha as $chaveB => $coluna){
                echo "Coluna $chaveB: $coluna |";
            }
            echo "<br/>";
        }
        ?>
    </pre>
    
</body>
</html>