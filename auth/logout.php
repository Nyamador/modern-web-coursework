<?php
    session_start();
    session_unset();
    $_SESSION['logged_in'] = false;
    header("Location: ../index.php");
?>