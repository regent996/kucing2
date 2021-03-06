<?php
// Include config file
include("auth.php"); //include auth.php file on all secure pages
require_once 'testtt.php';
 
// Define variables and initialize with empty values
$color ="";    
$color_err="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate color
    $input_color = trim($_POST["color"]);
    if(empty($input_color)){
        $color_err = "Please enter a color.";
    } elseif(!filter_var(trim($_POST["color"]), FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
        $color_err = 'Please enter a valid color.';
    } else{
        $color = $input_color;
    }
    
    
    
    // Check input errors before inserting in database
    if(empty($color_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO catcolor (color) VALUES (?)";
         
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_color);
            
            // Set parameters
            $param_color = $color;
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: colouradd.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($con);
}
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


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <div align="center" class="wrapper">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Adding Cat colour on dropdown</h2>
                    </div>
                    <p>Please enter Colour of cat you want.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($color_err)) ? 'has-error' : ''; ?>">
                            <label>Colour of Cat</label>
                            <input style="width: 50%;" type="text" name="color" class="form-control" value="<?php echo $color; ?>">
                            <span class="help-block"><?php echo $color_err;?></span>
                        </div>                      
                        
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="dashboard.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
        <div class="page-header">
                        <h2>Cat Colour Already Insert</h2>
                    </div>
            <?php
    // Attempt select query execution
                    $sql = "SELECT * FROM catcolor";
 if($result = mysqli_query($con, $sql)){
  if(mysqli_num_rows($result) > 0){

  echo "<table style='width:50%;' class='table table-bordered'>";
                                echo "<thead-dark>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Colour of Cat</th>";
                                        
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody id='myTable'>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['color'] . "</td>";
                                        
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


        

        <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-sm-none d-md-block">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
    </body>
        
  <!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jVectorMap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.2 -->
<script src="plugins/chartjs-old/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</html>


