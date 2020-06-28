<?php require_once 'mysql/connect.php';


       // creat SQL query
       $query= 'SELECT*FROM login ORDER BY date DESC';
       // get the result of the query
       $result= mysqli_query($conn, $query);
       // fetch data
       $posts= mysqli_fetch_all($result, MYSQLI_ASSOC);
       // var_dump($posts);
       // free result
       mysqli_free_result($result);
       // close connection
       mysqli_close($conn);

?>

<?php require_once 'includes/header.php' ?>

<section style="background:linear-gradient(rgba(0, 0, 50,0.3),rgba(0, 0, 50,0.3)),url(img/img3.jpg);" class="d-flex flex-column justify-content-around align-items-center">
        <br>
        <br>
        <br>
        <a href="mysql/logout.php" class= "text-light btn btn-danger">LOG OUT</a>
        <br>
            <h1 class= "text-light">Articles</h1>

    <?php foreach ($posts as $post) : ?>
        <br>
        <br>
        <br>
        <br>
            <div class='col-6 alert alert-info'>
                <h3 class= "text-center"><?php echo $post['Title'] ?></h3>
                <br>
                <br>
                <p class= "text-center px-4"><?php echo $post['Texte'] ?></p>
            </div>
            
    <?php endforeach; ?>

</section>

<?php include 'includes/footer.php' ?>
