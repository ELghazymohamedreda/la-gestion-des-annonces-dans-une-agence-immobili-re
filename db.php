<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    // $con = mysqli_connect("localhost","root","","agence");
    $con = mysqli_connect('localhost', 'Root', '', 'gestions');
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>