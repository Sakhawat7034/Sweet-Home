<?php include('server.php')
 ?>
 <?php  if(isset($_COOKIE['sakhawat']))
{
  header('Location: index.php');
  
} ?>
<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="bootstrap1.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
  <div><?php include "topView.php" ?></div>
   <form method="post" action="login.php">
  <div class="container" >
  <div class="d-flex justify-content-center h-100">
    <div class="card" style='height: 30rem;'>
      <div class="card-header">
        <h3>Sign In</h3>
        <?php if(isset($_SESSION['msg'])){
          echo "<p style='color: red;'>".$_SESSION['msg']."*</p>";
          unset($_SESSION['msg']);

        } ?>
      </div>
      <div class="card-body" >
        <form>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="username" name="username">
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="password" name="password">
          </div>
          <div class='form-group'>
        <?php include 'errors.php' ?>
      </div>
          
          <div class="row align-items-center remember">
            <input type="checkbox" name="remember" checked="checked"> 
      <label for="remember"> Remember me </label>
          </div>
          <div class="form-group">
            <input type="submit" value="Login" class="btn float-right login_btn" name="login_user">
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="register.php">Sign Up</a>
        </div>
        
      </div>
    </div>
  </div>
</div> 	
  </form>
   <?php include "js-jq.php" ?>
</body>
</html>