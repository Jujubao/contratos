<?php
    session_start();
    unset($_SESSION['ID']);
    session_destroy();
    header("location: ./login.php");
?>