<?php
// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Cart - PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mycss.css">
   <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myjs.js"></script>
    <style>
    .container{padding: 50px;}
    input[type="number"]{width: 20%;}
    </style>
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
</head>
</head>
<body>
 <!-- ------------------LOGO----------------- -->    
 <header class="w3-container w3-center">
      <img class="logo"src="img/logo.png">
            </header>
        <!-- ------------------navbar----------------- -->
        <div class="bar w3-bar w3-light-blue w3-border w3-large ">
          <a href="home.html" class="w3-bar-item w3-button  rounded w3-hover-blue"><img src="icons/shapes-educational-toy.svg"><b> Home</b></img></a>
          <a href="toys.html" class="w3-bar-item w3-button rounded w3-hover-blue "><img src="icons/gamepad.svg"><b> Toys</b></img></a>
          <a href="geander.html" class="w3-bar-item w3-button rounded w3-hover-blue"><img src="Icons/transgender.svg"> <b> Gender</b></img></a>
          <a href="login/account.php" class="w3-bar-item w3-button rounded w3-hover-blue"><img src="Icons/shop-emails.svg"><b> Account</b></img></a>
          <a href="viewcart.php" class="w3-bar-item w3-button rounded w3-hover-blue w3-teal"><img src="icons/check-order-status.svg"><b> Cart</b></img></a>
               
              <a class="title w3-bar-item w3-center w3-large">M & M Toys | BEST QUALITY .. BEST FUN</a>
        </div>
    <!-- ------------------home background----------------- -->
    
    
    
  </div>
  <img class="homebg"src="img/welcome-bg.png">
  
  <div class="w3-row">
    <div class="w3-container w3-col l7 w3-left">
      <img class="homebg"src="img/welcome-bg.png">
    <!-- contains -->
    <h1>Shopping Cart</h1>
    <table class="table">
    <thead>
    <tr>
    <th>Product</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Subtotal</th>
    <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if($cart->total_items() > 0){
    //get cart items from session
    $cartItems = $cart->contents();
    foreach($cartItems as $item){
    ?>
    <tr>
    <td><?php echo $item["name"]; ?></td>
    <td><?php echo '$'.$item["price"].' USD'; ?></td>
    <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
    <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
    <td>
      <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"class="w3-bar-item w3-button w3-jumbo w3-left">×</a>
    </td>
    </tr>
    <?php } }else{ ?>
    <tr><td colspan="5"><p>Your cart is empty.....</p></td>
    <?php } ?>
    </tbody>
    <tfoot>
    <tr>
    <td><a href="toys.html" class="btn btn-warning">Continue Shopping</a></td>
    <td colspan="2"></td>
    <?php if($cart->total_items() > 0){ ?>
    <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' USD'; ?></strong></td>
    <td><a href="checkout.php" class="btn btn-success btn-block">Checkout</a></td>
    <?php } ?>
    </tr>
    </tfoot>
    </table>
    </div>
        <!-- ------------------Cart Panel----------------- -->
        <div class="w3-container w3-col l2 w3-right">
          <div class="cart w3-container w3-border-left">
            <img src="icons/check-order-status.svg">
           
          </div>
        </div>
  </div>      
  
  
  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
          <img src="Icons/facebook.svg" class="w3-hover-opacity"></img>
          <img src="Icons/twitter.svg" class="w3-hover-opacity"></img>
          <img src="Icons/github.svg" class="w3-hover-opacity"></img>
          <img src="Icons/youtube.svg" class="w3-hover-opacity"></img>
          <img src="Icons/google-play.svg" class="w3-hover-opacity"></img>
        
        </footer>
        
      
</body>
</html>