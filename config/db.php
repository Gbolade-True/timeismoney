<?php
    $hostname='localhost';
    $username='id14343072_timeismoney';
    $password='Gbolalphasuperman4*';

    $conn = new mysqli($hostname, $username, $password);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected successfully";
    }
?>