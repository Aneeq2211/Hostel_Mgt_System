<?php
include "nav.php";
include "config.php";
session_start();


//code for registration
if (isset($_POST['submit']))
{
  $visid=$_POST["vid"];
  $vssn=$_POST["vusn"];
  $visname=$_POST["vname"];
  $vistype=$_POST["vtype"];
  $viscontact=$_POST["vphone"];

//(usn,reg_id,room_id,sname,sem,branch,gender,contact_no,parent_no,m_name,f_name,dob,blood group) VALUES

$sql = "INSERT INTO visitor(vis_id,vssn,vis_name,vis_type,vis_contact) VALUES('$visid','$vssn','$visname','$vistype','$viscontact')";
$result = mysqli_query($conn,$sql);
if ($result) {
  echo "New record created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Visitor Registration</title>
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <link rel="stylesheet" href="index.css" />

</head>
<body>


<div class="login">
    <h1>Visitor Registration Form</h1>
    <form method="post" action="addvisitor.php">
    <label>
      <p><input type="text" name="vid" value="" placeholder="Visitor Id"></p>
      <p><input type="text" name="vusn" value="" placeholder="Visitor USN"></p>
      <p><input type="text" name="vname" value="" placeholder="Visitor Name"></p>
      <p><input type="text" name="vtype" value="" placeholder="Relation"></p>
      <p><input type="text" name="vphone" value="" placeholder="Phone"></p>
      
      
     
      
    </label>
      <p class="submit"><input type="submit" name="submit" value="Submit"></p>
    </form>
  </div>

</body>
</html>
