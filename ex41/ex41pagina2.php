<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 4 p2</title>
</head>
<body>
    <h1>NOMBRE ENREGISTRAT</h1>
    <?php
    session_start();

    $_SESSION["occult"] = $_POST["occult"];
    ?>
    <a href="ex41pagina3.php">Endevinar</a>
    
</body>
</html>
