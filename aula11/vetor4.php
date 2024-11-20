<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor 4</title>
</head>
<body>
    <pre>
        <?php
        $cliente['razaosocial'] = 'Jose da Silva - ME';
        $cliente['nomefantasia'] = 'JS Soluções e Sistemas';
        $cliente['cidadade'] = 'Jales';

        echo "<h3>Mostrando com print_r</h3>";
        print_r($cliente);

        echo "<h3>Mostrando com var_dump</h3>";
        var_dump($cliente);

        echo "<h3>Percorrendo um array com foreach</h3>";
        foreach($cliente as $valor){
            echo "$valor <br/>";
        }

        echo "<h3>Percorrendo um array com foreach mostrando suas chaves</h3>";
        foreach($cliente as $chave => $valor){
            echo "$chave: $valor <br/>";
        }
        ?>
    </pre>
    
</body>
</html>