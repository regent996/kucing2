
<?php
//db connection
require_once 'testtt.php';
//query
$sql = "SELECT id,name FROM catlist";
if($result = mysqli_query($con, $sql)){
	$select= '<select name="select">';
while($rs=mysqli_fetch_array($result)){
      $select.='<option value="'.$rs['id'].'">'.$rs['name'].'</option>';
  }
}
$select.='</select>';
echo $select;


 // Close connection
                    mysqli_close($con);
?>