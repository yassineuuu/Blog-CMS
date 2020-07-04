<?php 
    require_once 'connect.php'; 
            // Get id
            $id= mysqli_real_escape_string($conn, $_GET['id']);
            // creat SQL query
            $query= 'SELECT*FROM articles WHERE id='.$id;
            // get the result of the query
            $result= mysqli_query($conn, $query);
            // fetch data
            $post= mysqli_fetch_assoc($result);
            // var_dump($posts);
            // free result
            mysqli_free_result($result);
            // close connection
            mysqli_close($conn);
    

if (isset($_POST['sub'])){
    
    $Usr=$_SESSION['UserName'];
    $Title=mysqli_real_escape_string($conn, $_POST['Titre']);
    $article=mysqli_real_escape_string($conn, $_POST['Text']);
    $update_id=mysqli_real_escape_string($conn, $_POST['update_id']);

$query="UPDATE `articles` SET `UserName`='$Usr',`Title`='$Title',`Text`='$article' WHERE id={$update_id}";

    if(mysqli_query($conn, $query)){
        // header('location: '.'http://localhost/Blog-CMS/views/adminArticles.php');
        echo "done";
    }else{
        echo "Failed to update" . mysqli_error($conn);
    }

}

?>

