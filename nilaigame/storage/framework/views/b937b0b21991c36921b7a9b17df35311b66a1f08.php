<!DOCTYPE html>
<html lang="en">

<head>
    <!--Setup
    ========================-->
    <meta charset="utf-8">

    <title><?php echo e($title); ?></title>

    <!-- Bootstrap core CSS & JS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Custom Carousel -->
    <link rel = "stylesheet" href="css/carsstyle.css">
    <link rel = "stylesheet" href="css/vanlan.css">
    <link rel = "stylesheet" href="css/animateit.css">

</head>

<body data-spy="scroll">
    <section id="section1">
        <div class="container">

            <!-- NAVBAR
                ------------------>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <!-- Logo
                    --------------->
                <a class="navbar-brand" href="#">
                    <img class="imgres" src="img/logo.png">
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/signin')); ?>">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="zoomIn animated">
                <h1 class = "Verdana"> Games dengan Rating Terbaik </h1>
            </div>
            
            <!-- 
            ============================= Carousel -->
            <div class="fadeIn animated">
                <section id="slider">
                    <input type="radio" name="slider" id="s1" checked>
                    <input type="radio" name="slider" id="s2">
                    <input type="radio" name="slider" id="s3">
                    <input type="radio" name="slider" id="s4">
                    <input type="radio" name="slider" id="s5">
                
                    <label for="s1" id="slide1">Watch Dogs 2</label>
                    <label for="s2" id="slide2">Middle - Earth : </br>Shadow of War</label>
                    <label for="s3" id="slide3">Dragons - Dogma : </br>Dark Arisen</label>
                    <label for="s4" id="slide4">Dark Souls III</label>
                    <label for="s5" id="slide5">Frostpunk</label>
                </section>
            </div>
        
        </div>

    </section>

</body>

<section id="footer">
    <center> 2019© Enveriesage Studios </center>
</section><?php /**PATH D:\xampp\htdocs\nilaigame\resources\views/pages/weland.blade.php ENDPATH**/ ?>