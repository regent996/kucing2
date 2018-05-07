<?php
require('db.php');

//Now to check, we use an if() statement



        
         ?>
<!DOCTYPE html>
<html>
<head>
	<header id="header">
				
    <?php include 'css/css.html'; ?>
				
			</header>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<section id="banner">
</head>
<body>




<div class="form">
<form method="post" action="registration.php" id="register_form">
  	<h1>Register</h1>
  	<?php if(!empty($_GET['s'])){ $msg = $_GET["s"];}else{ $msg = "";}?>
  	<?=$msg;?>

    <div class="field-wrap">
            <label>
            Username<span class="req">*</span>
          </label> 
  	 <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> 
	  <input type="text" name="username" required>
	  <?php if (isset($name_error)): ?>
	  	<span><?php echo $name_error; ?></span>
	  <?php endif ?>
  	</div>
    <div class="field-wrap">
            <label>
            Email<span class="req">*</span>
            </label>           
       <?php if (isset($email_error)): ?> class="form_error" <?php endif ?>       
       <input type="email" name="email"  required>
       <?php if (isset($email_error)): ?>
       <span><?php echo $email_error; ?></span>
       <?php endif ?>
    </div>
  	<div class="field-wrap">
            <label>
            Password<span class="req">*</span>
          </label> 
  		<input type="password"   name="password" required>
      <br>
  	</div>
  	<div>
  		<button type="submit" class="button button-block" name="register" id="reg_btn">Register</button>   
  	</div>
  </form>
<br /><br />
<p>Registered already? <a href='login.php'>LOGIN Here</a></p>
</div>


<?php ?>
</section>
</body>
<!-- Footer -->
			
					<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>


</html>

