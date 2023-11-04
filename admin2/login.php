<?php
require('inc/essentials.php');
include('E:\Xmapp\img\config.php');
session_start();

// Include the configuration file


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    if ($enteredUsername === $username && password_verify($enteredPassword, $passwordHash)) {
        // Successful login, create a session or token
        $_SESSION['authenticated'] = true;
        header('Location: protected.php');
        exit;
    } else {
        echo 'Invalid credentials';
    }
}
?>
