<?php require_once 'includes/header.php' ?>




<section style="background:linear-gradient(rgba(0, 0, 50,0.3),rgba(0, 0, 50,0.3)),url(img/img4.jpg);height:95vh" class="d-flex flex-row justify-content-around align-items-center">

<!-- login -->


    <div>
        <h1 class="text-light">LOGIN</h1>
        <br>
        <br>
        
        <form class="ml-5">
        <div class="form-group">
            <label for="exampleInputEmail1" class="text-light">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="text-light">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label text-light" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

<!-- sing up -->
    <div>
        <h1 class="text-light">SIGN IN</h1>
        <br>
        <br>
        <form class="ml-5">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4" class="text-light">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4"  class="text-light">Password</label>
            <input type="password" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress" class="text-light">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2" class="text-light">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity" class="text-light">City</label>
            <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
            <label for="inputState" class="text-light">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="inputZip" class="text-light">Zip</label>
            <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label text-light" for="gridCheck">
                Check me out
            </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>



</section>

<?php include 'includes/footer.php' ?>

