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
    <form method="get" action="exe02_mostra.php">
     
     <?php
     for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 4; $j++) {
            echo "Matriz [$i][$j]: <input type='number' name='matriz[$i][$j]'><br>";
        }
    }
     ?>
     <input type="submit" value="Enviar">
 </form>
    </body>
</html>
