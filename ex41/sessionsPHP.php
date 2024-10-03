<h1>Sessions</h1>

<?php
    session_start();   

    echo $_SESSION["nom"];

    $_SESSION["nom"] = "enric";

    