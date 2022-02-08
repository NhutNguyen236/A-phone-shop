<?php
    session_start();
    unset($_SESSION["admindb"]);
    header("Location: /molla/login.php");
?>