<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <pre>
        <?php
      $matriz = $_GET['matriz'];
       echo "<h3>Recebendo os dados e mostrando com echo</h3>";
       for ($i = 0; $i < 2; $i++) {
           for ($j = 0; $j < 4; $j++) {
               echo "matriz[$i][$j] = " . $matriz[$i][$j] . "<br>";
           }
       }

       echo "<h3>Mostrando com Foreach</h3>";
       foreach ($matriz as $chaveA => $linha){
           echo "--->Linha: $chaveA <br />";
           foreach ($linha as $chaveB => $coluna){
               echo "Coluna $chaveB: $coluna  ";
               echo "<br />";
           }
       }

       echo "<h3>Mostrando com print_r</h3>";
       print_r($matriz);

       echo "<h3>Mostrando com var_dump</h3>";
       var_dump($matriz);


        ?>
        
        </pre>
        <a href="exe02.php">Voltar</a>
    </body>
</html>
