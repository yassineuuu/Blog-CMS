<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Name= $_POST['Name'];
        $sub= "Message from $Name";
        $mail= $_POST['mail'];
        $msg= $_POST['msg'];

        $To= "yassinemakhlouk49@gmail.com";
        $headers= "From: $mail\r\n";
        $txt= "you have recived an email $Name"."\n\n"."$msg";


        mail($To, $sub, $msg, $headers);
        header("Location: ../index.php");
    }
?>