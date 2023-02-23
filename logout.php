<?php
    session_start();
    session_destroy();
    // Destroy session
    // if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: login.php");
    // }
    exit ;
?>