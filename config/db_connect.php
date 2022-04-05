<?php

    // connect to database
    $conn = mysqli_connect('localhost', 'martin', 'pass25WORD', 'qfk-motors');

    // check connection
    if(!$conn) {
        echo 'connection error: ' . mysqli_connect_error();
    }
    
?>