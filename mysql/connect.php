<?php

    // Creat connection

    $conn= mysqli_connect('localhost', 'root', '','cms-blog login');

    // Check connection
    if(mysqli_connect_errno()){
        // connection failed
        echo 'Failed to connect'.mysqli_connect_errno();
    }


 

    
    

?>