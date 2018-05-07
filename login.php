
<?php
$con = mysqli_connect("localhost","root","","testing");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<header id="header">
				    <?php include 'css/css.html'; ?>

			</header>
</head>
<body>

<?php
	
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `tbl_users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<section id="banner">
<div class="form">

<h1 class="banner">Log In</h1>
<form action="" method="post" name="login">
	<div class="field-wrap">
                        <label>
                            Username<span class="req">*</span>
                        </label>
<input type="text" autocomplete="off" name="username" required />
                    </div>
                    <div class="field-wrap">
                        <label>
                            Password<span class="req">*</span>
                        </label>
<input type="password" autocomplete="off" name="password"  id="password" required />
                    </div>

<a class="showpass" onclick="toggle_password('password');" id="showpass" style="color: #1ab188; margin-left: 1px;">Show Password</a>
<input name="submit" class="button button-block" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

</div>


</section>
<?php } ?>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
            <script src="js/index.js"></script>
            <script src="js/showpass.js" type="text/javascript"></script>



</body>
</html>
