<?php 
    session_start();

    require_once 'connect.php';

    $User=$_POST['User'];
    $Email=$_POST['Email'];
    $Pass=$_POST['Pass'];

     // creat SQL query
     $query= "SELECT*FROM login WHERE UserName='$User'";
     // get the result of the query
     $result= mysqli_query($conn, $query);
     // Check id  data exist
     $line= mysqli_num_rows($result);

     if($line==1){
         echo "User Name already exist ";
     }else{
        $register="INSERT INTO `login`(`id`, `UserName`, `E-mail`, `Password`, `Title`, `Texte`, `Date`) VALUES ('','$User', '$Email','$Pass','','',CURRENT_TIMESTAMP)";
        mysqli_query($conn, $register);
        echo "Registration success";
     }


?>