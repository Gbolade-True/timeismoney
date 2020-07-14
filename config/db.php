<?php

    $conn = mysqli_connect('localhost', 'root', 'Gbolalpha4*', 'timeismoney');

    // Check the connection
    if(mysqli_connect_errno()){
        // Connection failed
        echo 'Failed to connect to MySQL '. mysqli_connect_errno();
    }
?>