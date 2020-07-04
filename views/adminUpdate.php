<?php 
     require_once '../mysql/update.php';


require_once '../includes/adminHeader.php';

 ?>

<section style="background:linear-gradient(rgba(0, 0, 50,0.3),rgba(0, 0, 50,0.3)),url(../img/img3.jpg);min-height: 100vh" class="d-flex flex-column justify-content-around align-items-center">
      
      

<!-- creat a post -->
    <form class="col-6" action='<?php $_SERVER['PHP_SELF'];?>' method='POST'>
     
            <div class="form-group">
                <label for="title" class= "text-light">Titre</label>
                <input type="text" name='Titre' class="form-control" id="title" value='<?php echo $post['Title'] ?>'>
            </div>
            <div class="form-group">
                <label for="article" class= "text-light">Article</label>
                <textarea class="form-control" name='Text' id="article" cols="30" rows="10"><?php echo $post['Text'] ?></textarea>
            </div>
            <input type="text" name="update_id" value='<?php echo $update_id ?>'>
            <button type="submit" name='sub' class="btn btn-primary">Modifier</button>
    </form>
</section>