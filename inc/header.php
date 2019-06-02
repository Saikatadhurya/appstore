<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar">
  <a class="navbar-brand" href="index.php"><i class="fas fa-mobile-alt"></i> AppStore</a>
   <form action="search.php" method="get">
	<div class="buscar-caja">
	
        <input type="text" name="search" class="buscar-txt" placeholder=" Search AppStore " /> 
		<input type="submit" name="submit" value="Search" hidden />
        <a class="buscar-btn"> <i class="fa fa-search"></i> </a> 
	
    </div> 
	</form>
	 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if ($pagename=='index') { echo 'active';}?>">
        <a class="nav-link" href="index.php#jumbotron"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#about"><i class="fab fa-earlybirds"></i> About</a>
      </li>
	  <li class="nav-item <?php if ($pagename=='app') { echo 'active';}?>">
        <a class="nav-link" href="apps.php"><i class="fab fa-app-store"></i> Apps</a>
      </li>
	    <li class="nav-item <?php if ($pagename=='newupdates') { echo 'active';}?>">
        <a class="nav-link" href="index.php#updates"><i class="fas fa-check-circle"></i> New Updates</a>
      </li>
	   <li class="nav-item">
         <a class="nav-link" href="index.php#contact"><i class="fas fa-phone-square"></i> Contact</a>
      </li>
	 
	
	    
	 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bullhorn"></i> More 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
<!--<a class="dropdown-item" href="#"><i class="far fa-images"></i> View Gallery</a>-->
		  <a class="dropdown-item" href="blog.php"><i class="fab fa-blogger-b"></i> Blog</a>
        </div>
      </li>
	  
      <li class="nav-item right <?php if ($pagename=='login') { echo 'active';}?>">
         <?php if (!isset($_SESSION['email'])) {?><a class="nav-link" href="login.php"><i class="fas fa-check-circle"></i> Login/SignUp</a><?php }else { ?><a class="nav-link" href="logout.php"><i class="fas fa-check-circle"></i> Logout</a><?php } ?>
      </li>
	 
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="email" placeholder="email" aria-label="Search">
	   <input class="form-control mr-sm-2" type="password" placeholder="password" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign in</button>
    </form>-->
  </div>
</nav>