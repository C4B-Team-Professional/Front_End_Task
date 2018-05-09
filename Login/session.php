<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: account.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: account.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/account.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mycss.css">
    <script src="../js/jquery-slim.min.js"></script>
    <script src="../js/popper.min.js" ></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/myjs.js"></script>
<title>M & M TOYS</title>
</head>

<body style="background-color:#B2DFDB">
  <!-- ------------------LOGO----------------- -->    
  <header class="w3-container w3-center">
      <img  src="../img/logo.png"  >
            </header>
            <!-- ------------------navbar----------------- -->
           <!-- ------------------navbar----------------- -->
           <div class="bar w3-bar w3-light-blue w3-border w3-large ">
              <a href="../home.html" class="w3-bar-item w3-button  rounded w3-hover-blue "><img src="../icons/shapes-educational-toy.svg"><b> Home</b></img></a>
              <a href="../toys.html" class="w3-bar-item w3-button rounded w3-hover-blue "><img src="../icons/gamepad.svg"><b> Toys</b></img></a>
              <a href="../geander.html" class="w3-bar-item w3-button rounded w3-hover-blue"><img src="../Icons/transgender.svg"> <b> Gender</b></img></a>
              <a href="../login/account.php" class="w3-bar-item w3-button rounded w3-hover-blue w3-teal"><img src="../Icons/shop-emails.svg"><b> Account</b></img></a>
              <a href="../cart.html" class="w3-bar-item w3-button rounded w3-hover-blue"><img src="../icons/check-order-status.svg"><b> Cart</b></img></a>
             
            <a class="title w3-bar-item w3-center w3-large">M & M Toys | BEST QUALITY .. BEST FUN</a>
      </div>
       <!-- ------------------home background----------------- -->
       <img class="homebg"src="../img/welcome-bg.png">
<div class="jumbotron">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="session.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>