<?php
session_start();
if (isset($_SESSION['email'])) {
 	ob_start();
  	header('location: index.php');
	exit();
  } 
include_once 'inc/conn.php';
include_once 'inc/post.php';
$database = new Database();
$db = $database->getConnection();
$user = new User($db);
$errors = array();
	  if (isset($_POST['login_user'])) {
			  $user->email = $_POST['lemail'];
			  $user->pass = $_POST['lpass'];
			  
			  if (empty($user->email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($user->pass)) {
  	array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
	  
	  $user->pass = md5($user->pass);
	  
	   $num = $user->login();
	   if($num==1)
	   {
		   
		    $_SESSION['email'] = $user->email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('Location:index.php');
	   }else {
  		array_push($errors, "Wrong username/password combination");
  	}
	   
  }
  
} 
?>
<!doctype html>
<?php $pagename="login"?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
	 <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="css/login.css">
	  <link rel="stylesheet" href="css/search.css">
    <link rel="icon" href="image/icon.png" type="image/gif" sizes="16x16">
	<title>Login/SignUp</title>
	
  </head>
  <body data-spy="scroll" data-target="#navbar">
  <?php include("inc/header.php"); ?>
   <div id="logreg-forms">
  
        <form action="login.php" method="post" class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Log in</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Log in with Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Log in with Google+</span> </button>
            </div>
            <p style="text-align:center"> OR  </p>
            <input type="email" id="inputEmail" name="lemail" class="form-control" placeholder="Email address" required="" autofocus="">
            <input type="password" id="inputPassword" name="lpass" class="form-control" placeholder="Password" required="">
            
            <button class="btn btn-success btn-block" type="submit" name="login_user"><i class="fas fa-sign-in-alt"></i> Log in</button>
            <a href="#" id="forgot_pswd">Forgot password?</a>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button>
            </form>

            <form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            
            <form action="login.php" class="form-signup" method="post">
			<h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign Up Here</h1>
                <div class="social-login">
                    <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign up with Facebook</span> </button>
                </div>
                <div class="social-login">
                    <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign up with Google+</span> </button>
                </div>
                
                <p style="text-align:center">OR</p>
                <input type="text" id="user-name" name="name" class="form-control" placeholder="Full name" required="" autofocus="">
                <input type="email" id="user-email" name="email" class="form-control" placeholder="Email address" required autofocus="">
                <input type="password" id="user-pass" name="pass" class="form-control" placeholder="Password" required autofocus="">
                <input type="password" id="user-repeatpass" name="cpass" class="form-control" placeholder="Confirm Password" required autofocus="">

                <button class="btn btn-primary btn-block" type="submit" name="reg_user"><i class="fas fa-user-plus"></i> Sign Up</button>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            <br>
			
          <?php 
		  
	
		  
if (isset($_POST['reg_user'])) {
	
	 $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    $user->pass = $_POST['pass'];
    $user->cpass = $_POST['cpass'];
	if (empty($user->name)) { array_push($errors, "Name is required"); }
  if (empty( $user->email)) { array_push($errors, "Email is required"); }
  if (empty( $user->pass)) { array_push($errors, "Password is required"); }
  
  $stmt = $user->check();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
   extract($row);
   if( $user->email == "{$email}")
   {
	    array_push($errors, "Email already exists");
   }
  }
	if($user->pass != $user->cpass)
	{
	 array_push($errors, "Passwords do not match");
 }
   if (count($errors) == 0) {
	   
	   	$user->pass = md5($user->pass);
	if($user->create()){
        echo "<div class='alert alert-success'>Successfully Registered</div>";
    }
 
    // if unable to create the product, tell the user
    else{
        echo "<div class='alert alert-danger'>Unable to Sign Up.</div>";
    }
 }
}
?>  
 	<?php include('errors.php'); ?>
    </div>
  
  

<?php include("inc/footer.php") ?>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js" ></script>
	<script src="bootstrap/popper.js"></script>
     <script defer src="js/fontawesome.js"></script>
	 <script src="js/login.js"></script>
	 <script src="js/search.js"></script>
  </body>
</html>
