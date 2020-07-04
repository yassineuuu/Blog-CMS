<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">CMS-BLOG</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/Blog-CMS/views/adminArticles.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Blog-CMS/views/adminContact.php" >Contact</a>
                    </li>
                </ul>
                <div class="my-2 my-lg-0">
                <a href="#" class= "text-light btn btn-success"><?php echo $_SESSION['UserName'];?></a>
                <a href="../mysql/logout.php" class= "text-light btn btn-danger">LOG OUT</a>
                </div>
            </div>
        </nav>
    
    </header>