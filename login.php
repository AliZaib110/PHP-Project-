<?php
include("connectionPakServe.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form action="" method="GET">
<h2>Pak Serve Login: </h2>

<div class="container">
    <div class="row">
      <h2 style="text-align:center">Login </h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="text" name="username" placeholder="Username" pattern="[A-Za-z]{4,15}"
        title="please, enter characters between 4 and 15 in length and only letters. "
         required>
        <input type="password" name="password" placeholder="*******" pattern="[A-Za-z0-9]{4,8}" 
        title="please, enter characters between 4 and 8 in length and alphabets,numbers. "
        required>
        <input type="submit" name="submit" value="Login">
            </div>
      
    </div>
    
    
  </form>
  <?php

  if($_GET['submit'])
  {
    $us   = $_GET['username'];
    $pswd = $_GET['password'];

    if($us!="" && $pswd!="")
    {
      $query ="INSERT INTO user VALUE ('$us', '$pswd')";
      $data  =mysqli_query($conn, $query);

      if($data)
      {
        echo "Data inserted into batabase";
      }

    }
    else 
    {
      echo "All field required";
    }
    
  }
  
  ?>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="1 Sign Up.html" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>

</body>
</html>

