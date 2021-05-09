 <style>
     #topdiv{
  background-image: url("background.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center ;
  height: 100px;
  text-align: center;
  font-size: 50px;
  
}
  </style>
<div id="topdiv" >
		<span>SWEET HOME</span>
	</div>
		 <form action="" method="post">
	   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="index.php">
    <img src="background.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    SWEETHOME
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rent.php">RENT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sale.php">SALE</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MORE
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">CONTACT US</a>
          <a class="dropdown-item" href="faq.php">FAQ (HELP)</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <?php
       if (!isset($_SESSION['username'])) { ?>
        <button type="button" class="btn btn-success" onclick="location.href='login.php'">Sign in</button>;
        <button type="button" class="btn btn-success" onclick="location.href='register.php'">Sign up</button>;
 <?php }
 else{ ?>
  <button type="button" class="btn btn-success" onclick="location.href='logout.php ? logout=\'1\' ' ">Logout</button>;
<?php }
      ?>
    </form>
  </div>
</nav>
	</ul>
	</form>