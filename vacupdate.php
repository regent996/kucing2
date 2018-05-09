<?php
// Include config file
$con = mysqli_connect("localhost","root","","testing");
$vaccine="";    
$vaccine_err="";
    // Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate vaccine
    $input_vaccine = trim($_POST["vaccine"]);
    if(empty($input_vaccine)){
        $vaccine_err = 'Please enter an category.';     
    } else{
        $vaccine = $input_vaccine;
    }
// Validate status
    $typeofcat_id= $_GET['typeofcat_id'];
    $date = $_GET['date'];
    $birthDate = $date;
    $dob = new DateTime($birthDate);  //DateTime Object
    $interval = $dob->diff(new DateTime); //calculates the difference between two DateTime objects 
    $age1=$interval->y.$interval->m;
    $status3=2;
    
    // Check input errors before inserting in database
    if($age1<6){
        
        // Prepare an insert statement

        $sql1 = "INSERT INTO vaccine (vaccine,nextvaccine,typeofcat_id,status) VALUES (?,?,?,?)";
        $nextvaccine=  date('Y-m-d',strtotime("$vaccine +1 Month"));
            
        if($stmt = mysqli_prepare($con, $sql1)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_vaccine,$param_nextvaccine,$param_typeofcat_id,$param_status3);
            
            // Set parameters
            $param_vaccine = $vaccine;
            $param_nextvaccine = $nextvaccine;
            $param_status3 = $status3;
            $param_typeofcat_id =$typeofcat_id;

            
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: vaccine.php");
               
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }else{
        // Prepare an insert statement
        
        $sql1 = "INSERT INTO vaccine (vaccine,nextvaccine,typeofcat_id,status) VALUES (?,?,?,?)";
        $nextvaccine=  date('Y-m-d',strtotime("$vaccine +1 Year"));
            
        if($stmt = mysqli_prepare($con, $sql1)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_vaccine,$param_nextvaccine,$param_typeofcat_id,$param_status3);
            
            // Set parameters
            $param_vaccine = $vaccine;
            $param_nextvaccine = $nextvaccine;
            $param_status3 = $status3;
            $param_typeofcat_id = $typeofcat_id;
            
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: vaccine.php");
               
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



// Include config file
require_once 'testtt.php';
// Define variables and initialize with empty values
$status ="";    
$status_err="";
    

  if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
   
   
    // Check input errors before inserting in database
    if(empty($status_err)){
        // Prepare an update statement
        $sql = "UPDATE vaccine SET status=? WHERE id=?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_status , $param_id );
            
            // Set parameters
            $param_id = $id;
            $param_status =1;
            
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
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
            mysqli_stmt_bind_param($stmt,"i", $param_id);
            
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
                            <input type="date" name="vaccine" class="form-control" required>  </input>
                            <span class="help-block"><?php echo $vaccine_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($status_err)) ? 'has-error' : ''; ?>">
                            
                            <input type="hidden" name="status" class="form-control" value="<?php echo $status; ?>">
                            <span class="help-block"><?php echo $status_err;?></span>
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





