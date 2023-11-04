<?php
session_start();

if (isset($_SESSION['authenticated'])) {
    // User is authenticated, display the protected content
    echo 'Welcome to the protected area.';
    header('Location: protected.html');
} else {
    header('Location: login.html');
    exit;
}
?>
