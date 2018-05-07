<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once 'testtt.php';
    
    // Prepare a select statement
    $sql = "SELECT * FROM typeofcat WHERE id = ?";
    
    if($stmt = mysqli_prepare($con, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $image = $row["image"];
                $name = $row["name"];
                $cat_category = $row["cat_category"];
                $status = $row["status"];
                $gender = $row["gender"];
                $sire = $row["sire"];
                $dam = $row["dam"];
                $type = $row["type"];
                $color = $row["color"];
                $date = $row["date"];
                $price = $row["price"];
                $description = $row["description"];

            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
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
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        .thumbnail{
            margin: auto;
        }
        .panel-primary{
            width: 60%;
            margin: auto;
            border-radius: 14px;
            border-style: solid;
            background-color:#F2FFDD;
        }
        .thumbnail
        {
         border-radius: 30px;

        }
        .panel-success{
            width: 98%;
            margin: auto;
            margin-top: 4.5px;
            margin-bottom: : 20px;
            border-radius: 14px;
            border-style: dotted;
        }
    </style>
</head>
<body style="text-align: center;">
    <div class="panel panel-primary">
        <div class="panel panel-success">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Details</h1>
                    </div>
                    <div class="form-group">
                    <form method="post" enctype="multipart/form-data">

                            
                        <br>

                        <a target="_blank" >
                       <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row["image"] ).'" height="220" width="200  " class="thumbnail" /> ';  ?> 
                        </a>
                        <h2 class="form-control-static"><?php echo $row["name"]; ?></h2>
                        </form>
                        <br>
                    </div>
                    
                    <div class="form-group">
                        <label>Sire</label>
                        <p class="form-control-static"><?php echo $row["sire"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Dam</label>
                        <p class="form-control-static"><?php echo $row["dam"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Cat Category</label>
                        <p class="form-control-static"><?php echo $row["cat_category"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <p class="form-control-static"><?php echo $row["status"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <p class="form-control-static"><?php echo $row["gender"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Type of Cat</label>
                        <p class="form-control-static"><?php echo $row["type"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Colour</label>
                        <p class="form-control-static"><?php echo $row["color"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Date of birth</label>
                        <p class="form-control-static"><?php echo $row["date"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <p class="form-control-static"><?php echo $row["price"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <p class="form-control-static"><?php echo $row["description"]; ?></p>
                    </div>
                    <p><a onclick="goBack()" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</div>
</div>
<br>
<br>
</body>
</html>
<script>
function goBack() {
    window.history.back();
}
</script>
