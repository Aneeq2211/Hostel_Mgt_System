<?php
include "nav.php";
include "config.php";
session_start();


//code for updation
if (isset($_POST['submit']))
{
$roomno=$_POST['roomno'];




$contactno=$_POST['phone'];
$sem=$_POST['sem'];
$branch=$_POST['branch'];
$usn=$_POST['usn'];
$parentno=$_POST['pphone'];



//(usn,reg_id,room_id,sname,sem,branch,gender,contact_no,parent_no,m_name,f_name,dob,blood_group) VALUES

$sql = "UPDATE student SET room_id='$roomno', sem=$sem, branch='$branch', contact_no='$contactno', parent_no='$parentno' where usn='$usn'";
$result = mysqli_query($conn,$sql);
if ($result) {
  echo " Record updated successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Student</title>
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <link rel="stylesheet" href="index.css" />

</head>
<body>


<div class="login">
    <h1>Update Student Details</h1>
    <form method="post" action="updatestudent.php">
    <label>
      <p>Enter USN to be updated:<input type="text" name="usn" value="" placeholder="USN"></p>
      <p>Enter Details:<input type="text" name="roomno" value="" placeholder="Room number"></p>
      <p><input type="text" name="sem" value="" placeholder="Semester eg: 4"></p>
      <p><input type="text" name="branch" value="" placeholder="Branch eg: CSE "></p>
      <p><input type="text" name="phone" value="" placeholder="Student's Phone"></p>
      <p><input type="text" name="pphone" value="" placeholder="Parent's Phone"></p> 

      
     
      
    </label>
      <p class="submit"><input type="submit" name="submit" value="Submit"></p>
    </form>
  </div>

</body>
</html>
