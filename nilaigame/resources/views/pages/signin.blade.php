<!DOCTYPE HTML>

<head>

    <title>{{$title}}</title>
    <!-- Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/loginstyle.css" rel="stylesheet">
    <link rel = "stylesheet" href="css/animateit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>
<body>
    <div class = "bounceIn animated">
    <div class = "recback">
        <img class="logo" src="img/logo.png">
        <form action="/Dashboard" method="post">
        
            <input type ="hidden" name="_token" value="{{ csrf_token() }}" >
            <label class = "labelname" for="fname" autocomplete="off" >Username</label>
            <input type="text" name="username">
            <label class = "labelname" for="lname" autocomplete="off" >Password</label>
            <input type="password" id="passinput" name="password"> 

            <script src="js/passtoog.js"></script>  
            <span class="eye" onclick="toogleFunction()">
                <i id = "eye1" class="fa fa-eye"></i> 
                <i id = "eye2" class="fa fa-eye-slash"></i>
            </span>
                
            <button id = "submission" class="signinbutton customcolor" type ="submit" onclick="submitting">Sign In</button>
            <button class="signinbutton nocolor">Sign Up</button>
        
        </form>
        
        <div class="buttonfitting">
            <button class="steambutton"></button>
            <button class="gplusbutton margin-left:10px"></button>
        </div>
    </div>

</div>
</body>
<section id="footer">
    <center>
        2019© Enveriesage Studios
    </center>
</section>