<?php require_once '../mysql/connect.php';

       

?>

<?php 
require_once '../includes/adminHeader.php';
require_once '../mysql/posts.php';
require_once '../mysql/deletPost.php';

 ?>

<section style="background:linear-gradient(rgba(0, 0, 50,0.3),rgba(0, 0, 50,0.3)),url(../img/img3.jpg);min-height: 100vh" class="d-flex flex-column justify-content-around align-items-center">
      
      

<!-- creat a post -->
    <form class="col-6" action='../mysql/posts.php' method='POST'>
            
            <h1 class= "text-light text-center">Welcome <?php echo $_SESSION['UserName'] ?></h1>
            <br>
            <br>
            <div class="form-group">
                <label for="title" class= "text-light">Titre</label>
                <input type="text" name='Titre' class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="article" class= "text-light">Article</label>
                <textarea class="form-control" name='Text' id="article" cols="30" rows="10"></textarea>
            </div>
            
            <button type="submit" name='sub' class="btn btn-primary">Publier</button>
    </form>
</section>

<section style="background:linear-gradient(rgba(0, 0, 50,0.3),rgba(0, 0, 50,0.3));" class="d-flex flex-column justify-content-around align-items-center">


            
            <div style="background:rgba(0, 0, 0,0.5);" class="d-flex flex-column justify-content-around align-items-center col-8">
            <h1 class= "text-light">Articles</h1>
                <?php foreach ($posts as $post) : ?>
                    <br>
                    <br>
                    <br>
                    <br>
                        <div class='col-10 alert alert-info'>
                            <div class="d-flex flex-row justify-content-between">
                                <a href="http://localhost/Blog-CMS/views/adminUpdate.php?id=<?php echo $post['id']?>" class= "text-light btn btn-info">Modifier</a>
                                
                                <form method='POST' action="../mysql/deletPost.php">
                                    <input type="hidden" name="delete_id" value='<?php echo $post['id']?>'>
                                    <input type="submit" name="delete" value='Supprimer' class= "text-light btn btn-danger">
                                </form>
                            </div>

                            <h3 class= "text-center"><?php echo $post['Title'] ?></h3>
                            <br>
                            <br>
                            <p class= "text-center">Publier par <?php echo $post['UserName'] ?> le <?php echo $post['Date'] ?></p>
                            <br>
                            <br>
                            <p class= "text-center px-4"><?php echo $post['Text'] ?></p>
                        </div>
                        
                <?php endforeach; ?>
            </div>

</section>

<?php include '../includes/adminFooter.php' ?>
