<?php
require_once 'testtt.php';
// Define variables and initialize with empty values
$vaccine=$status ="";    
$vaccine_err=$status_err="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate vaccine
    $input_vaccine = trim($_POST["vaccine"]);
    if(empty($input_vaccine)){
        $vaccine_err = 'Please enter an category.';     
    } else{
        $vaccine = $input_vaccine;
    }

     $date = $_POST['date'];
     $birthDate = $date;
     $dob = new DateTime($birthDate);  //DateTime Object
     $interval = $dob->diff(new DateTime); //calculates the difference between two DateTime objects 
     $age1=$interval->y.$interval->m;

    // Check input errors before inserting in database
          
    if($age1<6){
        // Prepare an insert statement

        $sql1 = "INSERT INTO vaccine (vaccine,nextvaccine,status) VALUES (?,?,'2')";
        $nextvaccine=  date('Y-m-d',strtotime("$vaccine +1 Month"));

        if($stmt = mysqli_prepare($con, $sql1)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_vaccine,$param_nextvaccine,$param_status);
            
            // Set parameters
            $param_vaccine = $vaccine;
            $param_nextvaccine = $nextvaccine;
            $param_status = $status;
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: vaccine.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }else{
        // Prepare an insert statement

        $sql1 = "INSERT INTO vaccine (vaccine,nextvaccine,status) VALUES (?,?,?)";
        $nextvaccine=  date('Y-m-d',strtotime("$vaccine +1 Year"));

        if($stmt = mysqli_prepare($con, $sql1)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_vaccine,$param_nextvaccine,$param_status);
            
            // Set parameters
            $param_vaccine = $vaccine;
            $param_nextvaccine = $nextvaccine;
            $param_status = $status;

            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
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


