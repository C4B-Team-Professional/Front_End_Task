<?php include('server.php') ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/mycss.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   <script src="../js/jquery-slim.min.js"></script>
    <script src="../js/popper.min.js" ></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/myjs.js"></script>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<title>M & M TOYS</title>
</head>

<body style="background-color:#B2DFDB">
  
  <!-- ------------------LOGO----------------- -->    
  <header class="w3-container w3-center">
      <img class="logo"src="../img/logo.png">
            </header>
            <!-- ------------------navbar----------------- -->
        <div class="bar w3-bar w3-light-blue w3-border w3-large ">
                <a href="../home.html" class="w3-bar-item w3-button  rounded w3-hover-blue"><img src="../icons/shapes-educational-toy.svg"><b> Home</b></img></a>
                <a href="../toys.html" class="w3-bar-item w3-button rounded w3-hover-blue"><img src="../icons/gamepad.svg"><b> Toys</b></img></a>
                <a href="../geander.html" class="w3-bar-item w3-button rounded w3-hover-blue"><img src="../Icons/transgender.svg"> <b> Gender</b></img></a>
                <a href="account.php" class="w3-bar-item w3-button rounded w3-hover-blue w3-teal"><img src="../Icons/shop-emails.svg"><b> Account</b></img></a>
                <a href="../viewcart.php" class="w3-bar-item w3-button rounded w3-hover-blue"><img src="../icons/check-order-status.svg"><b> Cart</b></img></a>
               
              <a class="title w3-bar-item w3-center w3-large">M & M Toys | BEST QUALITY .. BEST FUN</a>
        </div>
    <!-- ------------------home background----------------- -->
                <img class="homebg"src="../img/welcome-bg.png"> 
    <!-- ------------------home background----------------- -->
      
    <form method="post" action="account.php" >
    <?php include('errors.php'); ?>

<div class="imgcontainer">
                        <img src="../Icons/account.svg" alt="Avatar" class="avtr">
                    </div>
                  
                    <div class="container">

                    
                    <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username">
               
                <label for="psw"><b>Password</b></label>
                      <input type="password" placeholder="Enter Password" name="password">
                    
                      <button type="submit" name="login_user">Login</button>
</div>
                      <br><br><br>
                      <div class="container" style="background-color:#f1f1f1">
                        <button type="button" class="cancelbtn"> <a href="sign up.php">sign up</a></button>
                        
                      
    <span class="psw"><a href="../forgot password.html">forgot password?</a></span>
  </div>
                  </form>
                  
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <img src="../Icons/facebook.svg" class="w3-hover-opacity"></img>
    <img src="../Icons/twitter.svg" class="w3-hover-opacity"></img>
    <a href="https://github.com/Fursan3/DDW.git" ><img src="../Icons/github.svg" class="w3-hover-opacity"></img></a>
    <img src="../Icons/youtube.svg" class="w3-hover-opacity"></img>
    <img src="../Icons/google-play.svg" class="w3-hover-opacity"></img>
  
  </footer>
  
</body>
</html>











