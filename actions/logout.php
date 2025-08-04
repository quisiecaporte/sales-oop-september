<?php

    session_start();
    session_unset();
    session_destroy();

    header("location: ../views");
    exit;


    // This is logout version2 code
?>
