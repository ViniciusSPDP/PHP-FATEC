<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe01</title>
</head>

<body>
    <form action="exe01_mostra.php" method="get">
        <?php
        for ($i = 0; $i <= 4; $i++) {
            echo "<label for='v$i'>Vetor[$i]:</label> ";
            echo "<input type='text' id='v$i' name='v$i' required/> <br/>";
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
