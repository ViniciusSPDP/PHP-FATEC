<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vetor2</title>
</head>
<body>
    <pre>
        <?php
        $bandas[] = 'Queen';
        $bandas[] = 'Scorpions';
        $bandas[] = 'Dire Straite';
        $bandas[] = 'U2';
        
        echo "<h3>Mostrando com print_r</h3>";
        print_r($bandas);
        echo "<h3>Mostrando com var_dump</h3>";
        var_dump($bandas);

        //Alteracao
        echo "<h3>Percorrendo um array com for</h3>";
        for($i = 0; $i <= count($bandas) - 1; $i++){
            echo "$bandas[$i] <br/>";
        }

        echo "<h3>Percorrendo um array com foreach</h3>";
        foreach ($bandas as $valor) {
            echo "$valor <br/>";
        }
        ?>
    </pre>
</body>
</html>