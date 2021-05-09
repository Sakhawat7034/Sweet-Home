<?php
    session_start(); 
  if (isset($_GET['logout'])) {
  	if (isset($_COOKIE['username']))
  	{
  		unset($_COOKIE['username']);
  		setcookie('sakhawat', "", -1);
  	}
  	session_destroy();
  	header("location: index.php");
  }
?>