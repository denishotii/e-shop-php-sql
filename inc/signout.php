<?php


    session_start();

    header("Location: ../index.php?logout=succes");
    session_destroy();
    exit();
?>