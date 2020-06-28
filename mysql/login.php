<?php require_once 'connect.php';

    $UserName=$_POST['User'];
    $Password=$_POST['Password'];

     // creat SQL query
     $query= "SELECT*FROM login WHERE UserName='$UserName' && Password='$Password'";
     // get the result of the query
     $result= mysqli_query($conn, $query);
     // Check id  data exist
     $line= mysqli_num_rows($result);

     if($line==1){
         header('location:../Articles.php');
     }else{
        echo 'password required';
     }


?>