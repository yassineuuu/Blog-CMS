<?php 
    session_start();
    require_once 'connect.php'; 
    

    if (isset($_POST['sub'])){
    
        $Usr=$_SESSION['UserName'];
        $Title=mysqli_real_escape_string($conn, $_POST['Titre']);
        $article=mysqli_real_escape_string($conn, $_POST['Text']);
    
        $query="INSERT INTO `articles`(`UserName`, `Title`, `Text`, `Date`) VALUES ('$Usr','$Title','$article', CURRENT_TIMESTAMP)";

        if(mysqli_query($conn, $query)){
            header('location: '.'http://localhost/Blog-CMS/views/adminArticles.php');
        }else{
            echo "Failed to publishe" . mysqli_error($conn);
        }

    }
?>