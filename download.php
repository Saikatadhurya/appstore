<?php
include_once 'inc/conn.php';
include_once 'inc/search.php';
$database = new Database();
$db = $database->getConnection();
$search = new Search($db);
 session_start();
 if (!isset($_SESSION['email'])) {
	  	ob_start();
  	header('location: login.php');
	exit();
 }
 if(isset($_GET['id'])){
	 $search->id =$_GET['id'];
 }
 else
 {
	 header('location: index.php');
 }
 $stmt = $search->fetch();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
	   extract($row);
?>
<!doctype html>
<?php $pagename="app"?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
	 <link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="css/search.css">
	 <link rel="stylesheet" href="css/download.css">
	 
    <link rel="icon" href="image/icon.png" type="image/gif" sizes="16x16">
	<title>Applications</title>
	<style>
	.container {margin-top:100px; height:100%;margin-bottom:100px;}
	</style>
  </head>
  <body data-spy="scroll" data-target="#navbar">
  
  <br>
  <?php include("inc/header.php"); ?>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="image/apps/<?php echo"{$image}"?>" alt=""/>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       <?php echo "{$app_name}"?>									  
                                    </h5>
                                    <h6>
									<?php echo "{$company}" ?>
                                    </h6>
                                    <br><br><br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Rating</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">Description</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
					<?php if ($sizemob!=0){?>
                        <a href="<?php echo "{$linkmobile}" ?>" class="btn btn-md btn-outline-danger profile-edit-btn">Download for Mobile</a><br>
					<?php } ?>
					<?php if ($sizepc!=0){?>
                        <a href="<?php echo "{$linkpc}" ?>" class="btn btn-md btn-outline-success profile-edit-btn">Download for PC</a>
						<?php } ?>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Version for PC</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "{$app_version_pc}" ?></p>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-6">
                                                <label>Version for Mobile</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "{$app_version_mob}" ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Updated On</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Mar 8,2019</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Downloads</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>100</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Download Size for Mobile</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "{$sizemob}" ?> MB</p>
                                            </div>
                                        </div>
										 <div class="row">
                                            <div class="col-md-6">
                                                <label>Download Size for PC</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "{$sizepc}" ?> MB</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Offered By</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "{$company}" ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								 <div class="row">
                                            <div class="col-md-6">
                                                <label>Global Rating</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo "{$rating}" ?>/10</p>
                                            </div>
                                        </div>
                                </div>  
								<div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
								 <div class="row">
                                            
                                            <div class="col-md-12">
                                                <p><?php echo "{$description}" ?></p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
<?php include("inc/footer.php") ?>
<br>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js" ></script>
	<script src="bootstrap/popper.js"></script>
     <script defer src="js/fontawesome.js"></script>
     <script defer src="js/search.js"></script>
	  <script defer src="js/app.js"></script>
	 
  </body>
</html>