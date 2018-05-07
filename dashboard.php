<?php include("auth.php"); //include auth.php file on all secure pages
require_once 'testtt.php';

/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
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
        #test {

        background-color: white;
        }
    </style>
    

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
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->


    <!-- Banner -->
            <section style="" id="banner">
                
                 
        <div class="container-fluid" style="    ">
                    <div class="page-header clearfix">
                        
                        <a href="adding.php" class="btn btn-success pull-left" style="margin-right: 5px;">Add New Cat Type</a> 
                        <a href="colouradd.php" class="btn btn-success pull-left" style="margin-right: 5px;">Add New Cat Colour</a>
                        <a href="create.php" class="btn btn-success pull-left">Add New Cat</a>
                        <h2 style="color: rgb(23,231,246);" class="pull-right">Cat Details</h2>
                    </div>
                    <input id="myInput" style="border-radius:5px; margin-bottom: 10px; background-color: white;" type="text" placeholder="Search.." >
                    <div id="test">
                    <?php
                    
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM typeofcat";
                    $date = date('Y-m-d');
                    if($result = mysqli_query($con, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-hover'>";
                                echo "<thead-dark>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Cat Picture</th>";
                                        echo "<th>Name of Cat</th>";
                                        echo "<th>Sire</th>";
                                        echo "<th>Dam</th>";
                                        echo "<th>Cat Category</th>";
                                        echo "<th>Status</th>";
                                        echo "<th>Gender</th>";
                                        echo "<th>Type of Cat</th>";
                                        echo "<th>Colour</th>";
                                        echo "<th>Date of birth</th>";
                                        echo "<th>Price</th>";
                                        echo "<th>Description</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody id='myTable'>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>".'<img src="data:image/jpeg;base64,'.base64_encode($row["image"] ).'" height="60" width="80" class="img-circle" />'."</td>";  
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['sire'] . "</td>";
                                        echo "<td>" . $row['dam'] . "</td>";
                                        echo "<td>" . $row['cat_category'] . "</td>";
                                        echo "<td>" . $row['status'] . "</td>";
                                        echo "<td>" . $row['gender'] . "</td>";
                                        echo "<td>" . $row['type'] . "</td>";
                                        echo "<td>" . $row['color'] . "</td>";
                                        echo "<td>" . $row['date'] . "</td>";
                                        echo "<td>" . $row['price'] . "</td>";
                                        echo "<td>" . $row['description'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                              echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                    }
 
                    // Close connection
                    mysqli_close($con);
                    ?>
               
            </div>        
       
    </div>  
        </div>            
                </div>
            </section>

 


        </div>
        

        <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-sm-none d-md-block">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
  <!-- /.content-wrapper -->
  


</body>
</html>
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
