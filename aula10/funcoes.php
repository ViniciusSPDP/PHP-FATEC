<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcoes</title>
</head>
<body>
    <?php
    //Funcao sem parametro ou argumento
    function texto(){
        echo "<p>Esta função mostra o texto sem argumento</p>";
    }

    //Função com parametro ou argumento
    function mostraValor($valor){
        echo "<p>Esta função mostra o valor informado com argumentos = $valor </p>";
    }
    ?>
    
</body>
</html>