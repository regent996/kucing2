<?php include("auth.php"); //include auth.php file on all secure pages
    require 'testtt.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <html lang="en">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

      <style type="text/css">
      
    
        

        .wrapper{
            width: 100%;
            
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:borderless a{
            margin-right: 15px;
        }
        
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script>
         $(document).ready(function(){
         $("#myInput").on("keyup", function() {
         var value = $(this).val().toLowerCase();
         $("#myTable tr").filter(function() {
         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
         });
        });
        });
        </script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      
    </ul>
    
  <nav class="navbar-nav ml-auto">
                    <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
                </nav>
    
  </nav>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a style="text-align: center; height: 50px;" href="index.php" class="brand-link">
      
      <span style="background-color: #3A3A38; font-style:oblique; font-size: 20px; " class="brand-text font-weight-light">Abu Hurairah Cat House</span>
    </a>

    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Add icons to the links using the .nav-icon class
    
               with font-awesome or any other icon font library -->
               
             <li class="nav-item has-treeview">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                <p>Dashboard</p>

              </p>
            </a>
          </li>    
          <li class="nav-item has-treeview">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fa fa-search"></i>
              <p>
                <p>Cat Details</p>

              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="adding.php" class="nav-link">
              <i class="nav-icon fa fa-github-alt"></i>
              <p>
                <p>Add New Type Cat</p>

              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="colouradd.php" class="nav-link">
              <i class="nav-icon fa fa-pencil"></i>
              <p>
                <p>Add New Colour Cat</p>

              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-laptop"></i>
              <p>
                Status
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
            <a href="Available.php" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p >Available</p>        
            </a>
          </li>
<li class="nav-item has-treeview">
            <a href="rehomed.php" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
                <p>Rehomed</p>  
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="dead.php" class="nav-link">
              <i class="nav-icon fa fa-remove"></i>
                <p>Dead</p>
            </a>
          </li>
            </ul>
          </li>
            </li>
              <li class="nav-item has-treeview">
            <a href="Vaccine.php" class="nav-link">
              <i class="nav-icon fa fa-eyedropper"></i>
              <p>
                <p>Vaccine</p>

              </p>
            </a>
          </li>
              <li class="nav-item has-treeview">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-share"></i>
              <p>Logout</p>
            </a>
          </li>
          </ul>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<div class="content-wrapper">   
<br>
<br>
<h2 style="color: rgb(23,231,246);" class="pull-left">Cat Dashboard</h2>
 <table class="table table-bordered">
  <thead>
    <tr>
      <th style="background-color: #7EB6FF  " scope="col">Type\Status</th>
      <th style="background-color: #FAE809    " scope="col">Available Cat</th>
      <th style="background-color: #FC9D00      " scope="col">Rehomed Cat</th>
      <th style="background-color:#FC0067      " scope="col">Dead Cat</th>
      <th style="background-color:#918B8E     " scope="col">Total of Type</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Abyssinian</th>
      <td><?php
 // validate available
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Abyssinian'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?> </td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Abyssinian'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Abyssinian'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Abyssinian'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">American Curl</th>
      <td><?php
 // validate available
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='American Curl'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 // validate available
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='American Curl'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 // validate available
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='American Curl'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td>
        <?php
 // validate available
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='American Curl'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?>
      </td>
    </tr>
    <tr>
      <th scope="row">Bengal</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Bengal'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Bengal'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Bengal'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Bengal'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">British Shorthair</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='British Shorthair'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='British Shorthair'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='British Shorthair'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='British Shorthair'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">Cornish Rex</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Cornish Rex'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Cornish Rex'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Cornish Rex'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Cornish Rex'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">DLH</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='DLH'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='DLH'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='DLH'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='DLH'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">Exotic LH</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Exotic LH'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Exotic LH'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Exotic LH'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Exotic LH'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">Exotic SH</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Exotic SH'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Exotic SH'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Exotic SH'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Exotic SH'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">Kinkalow</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Kinkalow'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Kinkalow'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Kinkalow'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Kinkalow'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">Maine Coon</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Maine Coon'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Maine Coon'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Maine Coon'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Maine Coon'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">Munchkin</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Munchkin'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Munchkin'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Munchkin'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Munchkin'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">Persian Flat Face</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Persian Flat Face'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Persian Flat Face'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Persian Flat Face'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Persian Flat Face'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">Ragdoll</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Ragdoll'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Ragdoll'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Ragdoll'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Ragdoll'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">Russian Blue</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Russian Blue'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Russian Blue'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Russian Blue'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Russian Blue'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">Scottish Fold</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Scottish Fold'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Scottish Fold'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Scottish Fold'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Scottish Fold'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">Siamese</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Siamese'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Siamese'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Siamese'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Siamese'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">Siberian</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Siberian'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Siberian'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Siberian'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Siberian'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr>
      <th scope="row">Sphynx</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'and type='Sphynx'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'and type='Sphynx'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'and type='Sphynx'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE type='Sphynx'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
    <tr style="background-color: white" >
      <th scope="row">Total by Status</th>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Available'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Rehomed'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat WHERE status='Dead'";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
      <td style="border: solid; border-width: 3px;"><?php
 $sql = "SELECT COUNT(*) AS TOTAL FROM typeofcat";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
  echo $row['TOTAL'];
         }
         }
      }                 
 ?></td>
    </tr>
  </tbody>
</table>
</div>
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-sm-none d-md-block">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
  <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>


