<?php 
    require_once 'connect.php'; 
           
    

if (isset($_POST['delete'])){
    
    $delete_id=mysqli_real_escape_string($conn, $_POST['delete_id']);

$query="DELETE FROM `articles` WHERE id={$delete_id}";

    if(mysqli_query($conn, $query)){
        header('location: '.'http://localhost/Blog-CMS/views/adminArticles.php');
        // echo "done";
    }else{
        echo "Failed to update" . mysqli_error($conn);
    }

}

?>