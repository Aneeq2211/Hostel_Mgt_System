<?php
include "nav.php";
include "config.php";
session_start();


//code for registration
if (isset($_POST['submit']))
{
$roomno=$_POST['roomno'];
$regno=$_POST['regid'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$name=$_POST['sname'];
$gender=$_POST['gender'];
$contactno=$_POST['phone'];
$sem=$_POST['sem'];
$branch=$_POST['branch'];
$usn=$_POST['usn'];
$parentno=$_POST['pphone'];
$dob=$_POST['dob'];
$bloodgroup=$_POST['bloodgrp'];

//(usn,reg_id,room_id,sname,sem,branch,gender,contact_no,parent_no,m_name,f_name,dob,blood_group) VALUES

$sql = "INSERT INTO `student` (`usn`, `reg_id`, `room_id`, `sname`, `sem`, `branch`, `gender`, `contact_no`, `parent_no`, `m_name`, `f_name`, `dob`, `blood_group`) VALUES ('$usn', '$regno', '$roomno', '$name', '$sem', '$branch', '$gender', '$contactno', '$parentno', '$mname', '$fname', '$dob', '$bloodgroup')";
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
    <title>Student Registration</title>
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <link rel="stylesheet" href="index.css" />

</head>
<body>


<div class="login">
    <h1>Student Registration Form</h1>
    <form method="post" action="registration.php">
    <label>
      <p><input type="text" name="usn" value="" placeholder="USN"></p>
      <p><input type="text" name="regid" value="" placeholder="Enter reg_id"></p>
      <p><input type="text" name="roomno" value="" placeholder="Room number"></p>
      <p><input type="text" name="sname" value="" placeholder="Student name"></p>
      <p><input type="text" name="sem" value="" placeholder="Semester eg: 4"></p>
      <p><input type="text" name="branch" value="" placeholder="Branch eg: CSE "></p>
      <p><input type="text" name="gender" value="" placeholder="Gender eg: M"></p>
      <p><input type="text" name="phone" value="" placeholder="Student's Phone"></p>
      <p><input type="text" name="pphone" value="" placeholder="Parent's Phone"></p> 
      <p><input type="text" name="mname" value="" placeholder="Mother's name"></p>
      <p><input type="text" name="fname" value="" placeholder="Father's name"></p>
      <p><input type="text" name="dob" value="" placeholder="2000-01-31"></p>
      <p><input type="text" name="bloodgrp" value="" placeholder="Blood Group"></p>
      
     
      
    </label>
      <p class="submit"><input type="submit" name="submit" value="Submit"></p>
    </form>
  </div>

</body>
</html>
