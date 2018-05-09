<?php
// Include config file
require_once 'testtt.php';
 
// Define variables and initialize with empty values
$name =$image= $date = $price =$status= $gender = $cat_category = $sire = $dam = $type = $color= $description = "";    
$name_err =$image_err= $date_err = $price_err =$status_err= $gender_err= $cat_category_err =$sire_err = $dam_err = $type_err = $color_err=$description_err = "";
    
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    //validate image2wbmp(image)
    if (!empty($_FILES['image']['tmp_name']));
{
    if ($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/jpg" || $_FILES['image']['type'] == "image/png")
    {
        if ($content = file_get_contents($_FILES['image']['tmp_name']))
        {
            $image = file_get_contents($_FILES['image']['tmp_name']);
        }
        else echo "$image_err";
    }
}
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var(trim($_POST["name"]), FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
        $name_err = 'Please enter a valid cat name.';
    } else{
        $name = $input_name;
    }
    // Validate sire
    $input_sire = trim($_POST["sire"]);
    if(empty($input_sire)){
        $sire_err = 'Please enter an sire.';     
    } else{
        $sire = $input_sire;
    }

    // Validate dam
    $input_dam = trim($_POST["dam"]);
    if(empty($input_dam)){
        $dam_err = 'Please enter an dam.';     
    } else{
        $dam = $input_dam;
    }
     // Validate  cat category{
  $input_cat_category = trim($_POST["cat_category"]);
    if(empty($input_cat_category)){
        $cat_category_err = 'Please enter an cat_category.';     
    } else{
        $cat_category = $input_cat_category;
    }
    // Validate status
    $input_status = trim($_POST["status"]);
    if(empty($input_status)){
        $status_err = 'Please enter an status.';     
    } else{
        $status = $input_status;
    }
    // Validate  gender{
  $input_gender = trim($_POST["gender"]);
    if(empty($input_gender)){
        $gender_err = 'Please enter an gender.';     
    } else{
        $gender = $input_gender;
    }
    // Validate  type
    $input_type = trim($_POST["type"]);
    if(empty($input_type)){
        $type_err = 'Please enter an type.';     
    } else{
        $type = $input_type;
    }
    // Validate  color
    $input_color = trim($_POST["color"]);
    if(empty($input_color)){
        $color_err = 'Please enter an color.';     
    } else{
        $color = $input_color;
    }
    // Validate  date
    $input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = 'Please enter an date.';     
    } else{
        $date = $input_date;
    }
    
    // Validate price
    $input_price = trim($_POST["price"]);
    if(empty($input_price)){
        $price_err = "Please enter the price amount.";     
    } elseif(!ctype_digit($input_price)){
        $price_err = 'Please enter a positive integer value.';
    } else{
        $price = $input_price;
    }
     // Validate  description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = 'Please enter an description.';     
    } else{
        $description = $input_description;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($image_err) && empty($status_err) && empty($cat_category_err) && empty($gender_err) && empty($sire_err) && empty($dam_err) && empty($type_err) && empty($color_err) && empty($date_err) && empty($price_err) && empty($description_err)){
        // Prepare an update statement
        $sql = "UPDATE typeofcat SET image=?, name=?,cat_category=?, status=?, gender=?, sire=?, dam=?, type=?, color=?, date=?, price=? ,description=? WHERE id=?";
         
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssssssi",$param_image, $param_name,  $param_cat_category, $param_status, $param_gender, $param_sire, $param_dam, $param_type, $param_color, $param_date, $param_price, $param_description , $param_id );
            
            // Set parameters
            $param_id = $id;
            $param_image = $image;
            $param_name = $name;
            $param_cat_category = $cat_category;
            $param_status = $status;
            $param_gender = $gender;
            $param_sire = $sire;
            $param_dam = $dam;
            $param_type = $type;
            $param_color = $color;
            $param_date = $date;
            $param_price = $price;
            $param_description = $description;
          
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: dashboard.php");
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
        $sql = "SELECT * FROM typeofcat WHERE id = ?";
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
                    $name = $row["name"];
                    $image = $row["image"];
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
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
 /*dropdown css*/
        #select{  
    display: block;
    width: 35%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    }

    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the cat details and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post" enctype="multipart/form-data">

                         
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name of Cat</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($sire_err)) ? 'has-error' : ''; ?>">
                            <label>Sire of Cat</label>
                            <input type="text" name="sire" class="form-control" value="<?php echo $sire; ?>">
                            <span class="help-block"><?php echo $sire_err;?></span>
                        </div>  
                        <div class="form-group <?php echo (!empty($dam_err)) ? 'has-error' : ''; ?>">
                            <label>Dam of Cat</label>
                            <input type="text" name="dam" class="form-control" value="<?php echo $dam; ?>">
                            <span class="help-block"><?php echo $dam_err;?></span>
                        </div>
                        <div  class="form-group <?php echo (!empty($cat_category_err)) ? 'has-error' : ''; ?>">
                            <label>Cat Category</label>
                            <br>
                            <input type="radio" name="cat_category" value="Pet" checked required/> Pet
                             <input type="radio" name="cat_category" value="Show"> Show
                             <input type="radio" name="cat_category" value="Breed"> Breed
                        </div>
                           <div class="form-group <?php echo (!empty($status_err)) ? 'has-error' : ''; ?>">
                            <label>Status</label>
                            <br>
                            <input type="radio" name="status" value="Available" checked required/> Available
                             <input type="radio" name="status" value="Dead"> Dead
                             <input type="radio" name="status" value="Rehomed"> Rehomed
                        </div>
                           <div class="form-group <?php echo (!empty($gender_err)) ? 'has-error' : ''; ?>">
                            <label>Gender</label>
                            <br>
                            <input type="radio" name="gender" value="Male" checked required/> Male
                             <input type="radio" name="gender" value="Female"> Female
                        </div>
                         <div class="form-group <?php echo (!empty($type_err)) ? 'has-error' : ''; ?>">
                         <label> Type of Cat:</label> <br>
                              <?php
                         //query
                         $sql = "SELECT id,type FROM catlist";
                         $con = mysqli_connect("localhost","root","","testing");
                         if($result = mysqli_query($con, $sql)){
                         $type= '<select name="type" id="select">';
                         while($row=mysqli_fetch_array($result)){
                         $type.='<option value="'.$row['type'].'">'.$row['type'].'</option>';
                         }
                         }
                         $type.='</select>';
                         echo $type;
                     ?>   
                            </div>
                        <div class="form-group <?php echo (!empty($color_err)) ? 'has-error' : ''; ?>">
                         <label> Colour:</label> <br>
                             <?php

                         //query
                         $sql = "SELECT id,color FROM catcolor";
                         $con = mysqli_connect("localhost","root","","testing");    
                         if($result = mysqli_query($con, $sql)){
                         $type= '<select name="color" id="select">';
                         while($row=mysqli_fetch_array($result)){
                         $type.='<option value="'.$row['color'].'">'.$row['color'].'</option>';
                         }
                         }
                         $type.='</select>';
                        echo $type;
                        ?>  
                            </div>
                        <div class="form-group <?php echo (!empty($date_err)) ? 'has-error' : ''; ?>">
                            <label>date</label>
                            <input type="date" name="date" class="form-control">  </input>
                            <span class="help-block"><?php echo $date_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                            <label>price</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $price; ?>">
                            <span class="help-block"><?php echo $price_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                            <label>Description of Cat</label>
                            <textarea name="description" class="form-control" value="<?php echo $description; ?>"></textarea>
                            <span class="help-block"><?php echo $description_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <div class="form-group">                        
                        <input type="file" name="image" id="image" />
                        </div>
                        <br>
                        <br>
                        <br>
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


