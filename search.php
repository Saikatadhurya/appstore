<?php
include_once 'inc/conn.php';
include_once 'inc/search.php';
$database = new Database();
$db = $database->getConnection();
$search = new Search($db);
 session_start();
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
	 <link rel="stylesheet" href="css/app.css">
	 
    <link rel="icon" href="image/icon.png" type="image/gif" sizes="16x16">
	<title>Applications</title>
	<style>
	.container {margin-top:50px; height:100%;margin-bottom:100px;}
	</style>
  </head>
  <body data-spy="scroll" data-target="#navbar">
  
  <br>
  <?php include("inc/header.php"); ?>
  <div class="container">
   <hr>
  <h1>Mobile Apps</h1>
  <hr>
  <div class="row">
  <?php  
 if(isset($_GET['submit'])){
 $search->keyword = $_GET['search'];
$stmt = $search->mobile();
 if($stmt->rowCount() != 0)
 {
  
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
	   extract($row);
	  ?>
<figure class="snip1423">
  <img src="image/apps/<?php echo"{$image}"?>" alt="sample57" />
  <figcaption>
    <h3><?php echo "{$app_name}"?></h3>
    <p><?php echo "{$description}"?></p>
    <div class="price">
      
    </div>
  </figcaption> 
  <a href="download.php?id=<?php echo "{$app_id}"?>"><i class="ion-social-android"></i></a>
  	
</figure>
  <?php
  }
 }else{echo "<div class='alert alert-danger'>No Result Found</div>";}
 }
 ?>

</div>
 <hr>
<h1>Desktop Apps</h1>
<hr>
<div class="row">
<?php  
 if(isset($_GET['submit'])){
 $search->keyword = $_GET['search'];
 $stmt = $search->desktop();
if($stmt->rowCount() != 0)
{
  
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
	   extract($row);
	  ?>
<figure class="snip1423">
  <img src="image/apps/<?php echo"{$image}"?>" alt="sample57" />
  <figcaption>
    <h3><?php echo "{$app_name}"?></h3>
    <p><?php echo "{$description}"?></p>
    <div class="price">
      
    </div>
  </figcaption> 
  <a href="download.php?id=<?php echo "{$app_id}"?>"><i class="ion-android-desktop"></i></a>
  <?php
  }
 }else{echo "<div class='alert alert-danger'>No Result Found</div>";}
 }
 ?>

</div>
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