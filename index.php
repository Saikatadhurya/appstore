<?php $pagename="index";
session_start();
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
	<title>MyApp</title>
	
  </head>
  <body data-spy="scroll" data-target="#navbar">
  <?php include("inc/header.php"); ?>
<div class="jumbotron" id="jumbotron">
  <h1 class="display-4 white">Android and PC Apps Here !</h1>
  <p class=" white">This is why you should download this fantastic app!</p>
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
<div id="about">
<hr></div>
<div class="container">
	<div  id="appSummary">
	<h1 class="shadow-lg p-3 mb-5 bg-white rounded" style="border-style: solid;border-width: 5px; padding:10px;margin-top:100px;">Explore Some Awesome Apps <i class="far fa-flushed"></i></h1>
	<p class="lead">Summary, once again, of your app's awesomeness</p>
	</div>
	<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="image/book.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><i class="fas fa-anchor"></i>Multi-touch</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  
  <div class="card">
    <img class="card-img-top" src="image/book.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><i class="fas fa-bicycle"></i>Video calling</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="image/book.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><i class="fas fa-cart-arrow-down"></i>Media support</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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