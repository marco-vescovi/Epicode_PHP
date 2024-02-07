<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: ../app/views/home.php");
} else {
    header("Location: login.php");
}

exit;
?>
