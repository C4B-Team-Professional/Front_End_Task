
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
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
                
               
       <form method="post" action="sign up.php" class="needs-validation" novalidate>
  	<?php include('errors.php'); ?> 
                    <div style="margin-left:40%;">
                        <img src="../Icons/account.svg" alt="Avatar" class="avtr">
                      </div>
                    <div style="margin-left:35%;" >
                      <div >
                        <label for="validationCustom01">username</label><br>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" id="validationCustom01" placeholder="user name" required>
                        <div class="invalid-feedback">
                            Please provide a fname.                        </div>
                      </div>
                     
                      <div >
                          <label for="validationCustom02">E-mail</label><br>
                          <input type="text" name="email" value="<?php echo $email; ?>" class="form-control" id="validationCustom03" placeholder="email" required>
                          <div class="invalid-feedback">
                            Please provide a email.
                          </div>
                        </div>
                    
   
                      <div>
                        <label for="validationCustom03">password</label><br>
                        <input type="password" name="password_1" class="form-control" id="validationCustom03" placeholder="password" required>
                        <div class="invalid-feedback">
                          Please provide a password.
                        </div>
                      </div>
                      <div>
                        <label for="validationCustom04">repeat password</label><br>
                        <input type="password" name="password_2" class="form-control" id="validationCustom04" placeholder="repeat password" required>
                        <div class="invalid-feedback">
                          Please provide a password.
                        </div>
                      </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                    </div>
                   
                  </div>
                  <button class="btn btn-primary" type="submit" name="reg_user">Submit form</button>
                	<p>
  		Already a member? <a href="account.php">Sign in</a>
  	</p> 
                </form>
                  
                  <script>
                  // Example starter JavaScript for disabling form submissions if there are invalid fields
                  (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                      // Fetch all the forms we want to apply custom Bootstrap validation styles to
                      var forms = document.getElementsByClassName('needs-validation');
                      // Loop over them and prevent submission
                      var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                          if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                          }
                          form.classList.add('was-validated');
                        }, false);
                      });
                    }, false);
                  })();
                  </script>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <img src="../Icons/facebook.svg" class="w3-hover-opacity"></img>
    <img src="../Icons/twitter.svg" class="w3-hover-opacity"></img>
    <img src="../Icons/github.svg" class="w3-hover-opacity"></img>
    <img src="../Icons/youtube.svg" class="w3-hover-opacity"></img>
    <img src="../Icons/google-play.svg" class="w3-hover-opacity"></img>
  
  </footer>
      
</body>
</html>











































        
        
        
        
        
        
        
        
        
        
        