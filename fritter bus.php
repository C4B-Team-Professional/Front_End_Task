<?php
// include database configuration file
include 'dbConfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mycss.css">
   <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myjs.js"></script>
<title>M & M TOYS</title>
</head>

<body style="background-color:#B2DFDB">
  
  <!-- ------------------LOGO----------------- -->    
  <header class="w3-container w3-center">
      <img class="logo"src="img/logo.png">
            </header>
            <!-- ------------------navbar----------------- -->
        <div class="bar w3-bar w3-light-blue w3-border w3-large ">
                <a href="home.html" class="w3-bar-item w3-button  rounded w3-hover-blue"><img src="icons/shapes-educational-toy.svg"><b> Home</b></img></a>
                <a href="toys.html" class="w3-bar-item w3-button rounded w3-hover-blue  w3-teal"><img src="icons/gamepad.svg"><b> Toys</b></img></a>
                <a href="geander.html" class="w3-bar-item w3-button rounded w3-hover-blue"><img src="Icons/transgender.svg"> <b> Gender</b></img></a>
                <a href="login/account.php" class="w3-bar-item w3-button rounded w3-hover-blue"><img src="Icons/shop-emails.svg"><b> Account</b></img></a>
                <a href="viewcart.php" class="w3-bar-item w3-button rounded w3-hover-blue"><img src="icons/check-order-status.svg"><b> Cart</b></img></a>
               
              <a class="title w3-bar-item w3-center w3-large">M & M Toys | BEST QUALITY .. BEST FUN</a>
        </div>
    <!-- ------------------home background----------------- -->
                <img class="homebg"src="img/welcome-bg.png"> 
               
                                <?php
        //get rows query
        $pid=31;
        $query = $db->query("SELECT * FROM products where id=$pid");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
              <div class="container">
                                <div style="padding:50px">
                                        <h1><?php echo $row["name"]; ?></h1>
                                        <div class="ccard w3-card">

                                          <img class="rounded"src="img/13.jpg" alt="Car" style="width:100%;height:500px">

                                          <div class="c_btn w3-btn w3-center w3-block btn btn-info" style="margin-left:0;height:35px">
                                          <?php echo '$'.$row["price"].' USD'?>
                                          </div>
                                        </div>
                                        <a class="w3-btn btn-success w3-bar" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add to cart</a>
                                
                                </div>
                                <div id="products" class="row list-group">
       
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>              


                 
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
      </footer>
      
</body>
</html>











