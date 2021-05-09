<?php  if (count($errors) > 0) : ?>
 
  	<?php foreach ($errors as $error) : ?>
  	  <?php echo "<p style='color: red;'>".$error."*</p>"; ?>
  	<?php endforeach ?>
 
<?php  endif ?>