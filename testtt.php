<?php


$con = mysqli_connect("localhost","root","","testing");

  $username = "username";
  $email = "email";
  if (isset($_POST['register'])) 
  {
   
     
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $color = $_POST['color'];
    $image = $_FILES['image']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    $description= $_POST['description'] ;

    


        

    $sql_u = "SELECT * FROM tbl_users WHERE username='$username'";
    $sql_e = "SELECT * FROM tbl_users WHERE email='$email'";
    $res_u = mysqli_query($con, $sql_u);
    $res_e = mysqli_query($con, $sql_e);
    $date = date('Y-m-d');
    if (mysqli_num_rows($res_u) > 0) {
      $name_error = "Sorry... username already taken";  
    }else if(mysqli_num_rows($res_e) > 0){
      $email_error = "Sorry... email already taken";  
    }else{
      
           $query = "INSERT INTO tbl_users (username, email, password) 
                VALUES ('$username', '$email', '".md5($password)."')";
           $results = mysqli_query($con, $query);
           header('Location: test.php?s=Successful!!');
           //echo 'Successful';
           exit();
    }
 
 }
 