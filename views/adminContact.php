<?php require_once '../includes/adminHeader.php' ?>


<section style="background:linear-gradient(rgba(0, 0, 50,0.3),rgba(0, 0, 50,0.3)),url(../img/img2.jpg);height:95vh" class="d-flex flex-column justify-content-center align-items-center">
    <h1 class= "text-light">CONTACT</h1>
    <form class="col-6" action='../mysql/.php' method='POST'>
            <div class="form-group">
                <label for="User" class= "text-light">User</label>
                <input type="text" name='' class="form-control" id="User">
            </div>
            <div class="form-group">
                <label for="email" class= "text-light">Email</label>
                <input type="email" name='' class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="article" class= "text-light">Message</label>
                <textarea class="form-control" name='' id="article" cols="30" rows="10"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

</section>


<?php include '../includes/adminFooter.php' ?>