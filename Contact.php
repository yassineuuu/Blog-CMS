<?php require_once 'includes/header.php' ;
        require_once 'mysql/message.php'; 

?>


<section style="background:linear-gradient(rgba(0, 0, 50,0.3),rgba(0, 0, 50,0.3)),url(img/img2.jpg);height:95vh" class="d-flex flex-column justify-content-center align-items-center">
    <h1 class= "text-light">CONTACT</h1>
    <form class="col-6" action='mysql/message.php' method='POST'>
            <div class="form-group">
                <label for="User" class= "text-light">Name</label>
                <input type="text" name='Name' class="form-control" id="User">
            </div>
            <div class="form-group">
                <label for="email" class= "text-light">Email</label>
                <input type="email" name='mail' class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="article" class= "text-light">Message</label>
                <textarea class="form-control" name='msg' id="article" cols="30" rows="10"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Publier</button>
    </form>


</section>


<?php include 'includes/footer.php' ?>