
<?php require_once 'includes/header.php' ?>




<section style="background:linear-gradient(rgba(0, 0, 50,0.3),rgba(0, 0, 50,0.3)),url(img/img4.jpg);min-height:95vh;padding:2rem" class="d-flex justify-content-between align-items-center">
    <div class="container d-flex flex-row flex-wrap justify-content-between align-items-top">
    <!-- login -->


        <div>
            <h1 class="text-light">LOGIN</h1>
            <br>
            <br>
            
            <form action='mysql/login.php' method='POST'>
                <div class="form-group">
                    <label for="InputUserName" class="text-light">User Name</label>
                    <input type="text" class="form-control" name='User' id="InputUserName">
                </div>
                <div class="form-group">
                    <label for="InputPassword1" class="text-light">Password</label>
                    <input type="password" class="form-control" name='Password' id="InputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="Check1">
                    <label class="form-check-label text-light" for="Check1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

    <!-- sing up -->
        <div>
            <h1 class="text-light">SIGN IN</h1>
            <br>
            <br>
            <form action='mysql/register.php' method='POST'>
            
                <div class="form-group">
                    <label for="userName" class="text-light">User Name</label>
                    <input type="text" class="form-control" name='User' id="userName">
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Password4"  class="text-light">Password</label>
                    <input type="password" class="form-control" name='Pass' id="Password4">
                </div>
                <div class="form-group col-md-6">
                    <label for="confirmPassword"  class="text-light">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="text-light">Email</label>
                <input type="email" class="form-control" name='Email' id="email" placeholder="jdoe@example.com">
            </div>
            <div class="form-group">
                <label for="confirmEmail" class="text-light">Confirm Email</label>
                <input type="email" class="form-control" id="confirmEmail">
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


    </div>
</section>

<?php include 'includes/footer.php' ?>

