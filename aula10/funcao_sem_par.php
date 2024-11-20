<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcao_sem_par</title>
</head>
<body>
    <?php

    //Declarando função
    function bemVindo(){
        echo "<p align='center'>Olá, seja bem vindo ! </p>";
    }

    echo "<h3>Invocando a função bemVindo()</h3>";
    bemVindo();

    echo "<h3>Função bemVindo() dentro do for</h3>";

    //Usando dentro do for
    for($i = 1; $i <5; $i++){
        bemVindo();
    }
    ?>
</body>
</html>