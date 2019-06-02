<?php $pagename="index";
session_start();
include_once 'inc/conn.php';
include_once 'inc/search.php';
$database = new Database();
$db = $database->getConnection();
$search = new Search($db);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
	 <link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="css/search.css">
    <link rel="icon" href="image/icon.png" type="image/gif" sizes="16x16">
	<title>AppStore</title>
	<style>
	.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #ffffff;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
/* Three columns side by side */
.about.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .about .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.about .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.about .container {
  padding: 0 16px;
}

/* Clear floats */
.about .container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.about .title {
  color: grey;
}

.about .button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.about .button:hover {
  background-color: #555;
}

</style>
  </head>
  <body data-spy="scroll" data-target="#navbar">
  <?php include("inc/header.php"); ?>
  
<div class="jumbotron" id="jumbotron">
  <h1 class="display-4 white">Android and PC Apps Here !</h1>
  <p class=" white">This is why you should download this fantastic app!</p>
  <?php if (isset($_SESSION['email'])){?>
  <div class="alert alert-success" style="max-width:400px;"> Welcome <?php echo $_SESSION['email'];?></div>
  
  
  <?php } ?>
  <hr class="my-4">
  <p class=" white"><b>Want to know more? Join us !!</b></p>
  <form>
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="email">Email address</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="email" class="form-control" id="email" placeholder="Your email">
      </div>
    </div>
    
    <div class="col-auto">
      <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">Join us</button>
	  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Congrats</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body alert alert-success">
        You are successfully Joined us !!! Keep in Touch !!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</form>
<center><div class="zoom"><a href="#about" class="zoom"><img src="image/arr.gif" style="height:90px;margin-top:150px;padding:10px;background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));"></a></div></center>
</div>
<div id="updates">
<hr></div>
<div class="container">
	<div  id="appSummary">
	<h1 class="shadow p-3 mb-5 bg-white rounded" style="border-style: solid;border-width: 3px; padding:10px;margin-top:100px;">Explore Here Some Awesome  <i class="fab fa-app-store"></i>pps !!</h1>
	<p>Download Now For FREE !!!</p>
	</div>
	<div class="row">
<?php	$stmt = $search->home();
  
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
	   extract($row);?>
	   <div class="col-md-4">
	   <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="image/apps/<?php echo"{$image}"?>" alt="Avatar" style="width:300px;height:300px; padding:1em;">
    </div>
    <div class="flip-card-back">
      <h1><?php echo "{$app_name}"?></h1> 
      
      <a href="download.php?id=<?php echo "{$app_id}"?>" class="btn btn-md btn-outline-light">Download Now</a>
	  <p style="padding:5px;"><?php echo "{$description}"?></p> 
    </div>
  </div>
</div>
</div>
  
  
  <?php 
  }
  ?>
</div>
<div id="about">
<hr></div>
<div class="about">
<h1 class="shadow-lg p-3 mb-5 bg-white rounded" style="border-style: solid;border-width: 8px; padding:10px;margin-top:100px;"><center>About Developer</center></h1>
 <div class="col-md-12">
    <div class="card">
     <center> <img src="image/sai.jpg" alt="Saikat" style="width:25%; margin:10px;border-radius:10px;">
      <div class="container">
        <h2>Saikat Adhurya</h2>
        <p class="title">CEO &amp; Founder</p>
        <p>A very energitic and enthusiastic person. Interested in Web Development.</p>
     <a href="https://www.facebook.com/saikat.adhurya.0101">  <i class="fab fa-facebook" style="font-size: 3em;;"></i></a>
     <a href="sakatadhuryabirds@gmail.com">  <i class="fas fa-envelope-square" style="font-size: 3em;;"></i></a>
     <a href="https://www.linkedin.com/in/saikat-adhurya-b3a968103/">  <i class="fab fa-linkedin" style="font-size: 3em;;"></i></a>
      </div></center>
    </div>
  </div>
  </div>
<div id="contact">
<hr></div>
<div class="container contact-form" style="margin-top:80px;">
            <div class="contact-image">
                <img src="image/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form>
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="button" name="btnSubmit" class="btnContact" value="Send Message"  data-toggle="modal" data-target="#exampleModal1"/>
							<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Done !!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body alert alert-success">
        Message Sent
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
<?php include("inc/footer.php") ?>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js" ></script>
	<script src="bootstrap/popper.js"></script>
     <script defer src="js/fontawesome.js"></script>
 
	 
  </body>
</html>