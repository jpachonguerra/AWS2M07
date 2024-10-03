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

    $_SESSION["frase2"] = $_POST["frase2"];
?>
    <h1>COINCIDÈNCIES</h1>
    <?php
        $frase1 = explode(' ', $_SESSION["frase1"]);
        $frase2 = explode(' ', $_SESSION["frase2"]);
        $frase1length = count($frase1);
        $frase2length = count($frase2);
        for ($i=0; $i < $frase1length; $i++) { 
            $paraula = 0;
            for ($j=0; $j < $frase2length; $j++) { 
                if (strcomp($frase1[i], $frase2[j]) == 0):
                    $paraula++;
                endif;
            }
            echo '<p>La paraula ' $frase1[i] 'es repeteix' $
        }
    ?>

    <a href="ex42pagina1.php">Torna a Inici</a>
</body>
</html>

        