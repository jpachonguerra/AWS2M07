    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 4.3 p3</title>
</head>
<body>
    <?php
       session_start();

       $_SESSION["endevina"] = $_POST["endevina"];

        if ($_SESSION["endevina"] == NULL):
        echo ' 
            <h1>ENDEVINA EL NOMBRE</h1>

            <form method="post" action="ex41pagina3.php">
                <input type="number" name="endevina">
                <input type="submit" value="Endevina">
            </form>
        ';
        
        elseif ($_SESSION["endevina"]!= NULL):
            if ($_SESSION["occult"] == $_SESSION["endevina"]):
                echo '
                    <h1>NOMBRE ENDEVINAT!</h1>
                    <a href="ex41pagina1.php">Torna a Inici</a>
                ';
            else:  
                echo '
                <h1>NOMBRE INCORRECTE</h1>

                <form method="post" action="ex41pagina3.php">
                    <input type="number" name="endevina">
                    <input type="submit" value="Endevina">
                </form>
                ';
            endif;
        endif;
    ?>
</body>
</html>
