<?php
    session_start();

    $_SESSION['logged_in'] = false;
    $_SESSION['username'] = "";
    //redirectionati utilizatorul la pagina index.html
    header('location: index.html');
    exit;
?>
