<?php
// Include config file
require_once 'testtt.php';
 
// Define variables and initialize with empty values
$vaccine= "";    
$vaccine_err="";
    
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["vaccine"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate vaccine
    $input_vaccine = trim($_POST["vaccine"]);
    if(empty($input_vaccine)){
        $vaccine_err = 'Please enter an vaccine.';     
    } else{
        $vaccine = $input_vaccine;
    }

    
    // Check input errors before inserting in database
    if(empty($vaccine_err) && empty($nextvaccine_err)){
        // Prepare an upvaccine statement
        $sql = "UPDATE vaccine SET vaccine=? , nextvaccine=? WHERE id=?";
        $nextvaccine=  date('Y-m-d',strtotime("$vaccine +1 Month"));
         
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssi",$param_vaccine,$param_nextvaccine, $param_id );
            
            // Set parameters
            $param_id = $id;  
            $param_vaccine = $vaccine;
            $param_nextvaccine = $nextvaccine;
           
          
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records upvaccined successfully. Redirect to landing page
                header("location: vaccine.php");
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM vaccine WHERE id=?";
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $vaccine = $row["vaccine"];
                    $nextvaccine = $row["nextvaccine"];
                   
                    
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($con);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vaccine Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }


    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Vaccine Record</h2>
                    </div>
                    <p>Please edit the cat details and submit to vaccine the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post" enctype="multipart/form-data">
                        
                         
                        <div class="form-group <?php echo (!empty($vaccine_err)) ? 'has-error' : ''; ?>">
                            <label>vaccine</label>
                            <input type="date" name="vaccine" class="form-control">  </input>
                            <span class="help-block"><?php echo $vaccine_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input id="submitbutto" type="submit" class="btn btn-primary" value="Submit">
                        <a onclick="goBack()" class="btn btn-default">Cancel</a>
                        <br>
                        <br>
                        <br>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
<script>
function goBack() {
    window.history.back();
}
</script>


