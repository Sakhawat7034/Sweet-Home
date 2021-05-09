<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sweet home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="bootstrap1.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
  <?php include "topView.php" ?>
  
	
  <form method="post" action="register.php">
     <div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card" style="height: 30rem;">
      <div class="card-header">
        <h3>Sign In</h3>
      </div>
      <div class="card-body" >
         <form>
  	<div class="input-group form-group">
      <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
  	  <input type="text" class="form-control" placeholder="username" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group form-group">
  	  <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-envelope"></i></span>
            </div>
  	  <input type="email" class="form-control" placeholder="email"  name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group form-group">
      <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
  	  <input type="password" class="form-control" placeholder="password"  name="password_1">
  	</div>
  	<div class="input-group form-group">
      <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
  	  <input type="password" class="form-control" placeholder="confirm password" name="password_2">
  	</div>
    <div class='form-group'>
        <?php include 'errors.php' ?>
      </div>
  	<div class="form-group">
  	  <button type="submit" class="btn float-right login_btn" name="reg_user">Register</button>
  	</div>
  	<div class="card-footer">
        <div class="d-flex justify-content-center links">
  		Already a member? <a href="login.php">Sign in</a>
  	</div>
        
      </div>

     </div>
  </div>
  </form>
  <?php include "js-jq.php" ?>
</body>
</html>