<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 4.2 p1</title>
</head>
<body>
<?php
    session_start();

    $_SESSION["frase1"] = $_POST["frase1"];
    ?>
    <h1>ENREGISTRA FRASE 2</h1>
    <form method="post" action="ex42pagina3.php">
        <input type="text" name="frase2">
        <input type="submit" value="Enregistra">
    </form>
    
</body>
</html>

        