<?php

    if(isset($_POST['send'])){
        $Name= $_POST['Name'];
        $sub= "Message from $Name";
        $mail= $_POST['mail'];
        $msg= $_POST['msg'];

        $To= "yassinemakhlouk49@gmail.com";
        $headers= "From: $mail";
        $txt= "you have recived an email $Name"."\n\n"."$msg";


        mail($To, $sub, $msg, $headers);
        header("Location: http://localhost/Blog-CMS/Contact.php");
    }
?>