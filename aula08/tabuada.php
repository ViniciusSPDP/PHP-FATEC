<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>
    <h3>Selecione um numero para fazer a tabuada</h3>
    <form action="tabuda_mostra.php" method="get">
        <select name="n" id="">
            <?php
            $i = 1;
            do {
                echo "<option value='$i'>$i</option>";
                $i++;
            } while ($i <= 10);
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>

</body>

</html>