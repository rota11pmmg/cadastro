<?php
    session_start();
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header("Location: login.php");
?>