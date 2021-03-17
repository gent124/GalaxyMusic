<?php
require_once "config.php";

session_start();

if (isset($_SESSION['login'])) {
    header('Location: dashboard.php');
    exit;
} else {
    header('Location: login.php');
    exit;
}

$conn->close();
?>